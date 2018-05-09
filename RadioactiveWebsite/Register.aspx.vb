Imports System.Data
Imports System.Data.SqlClient
Partial Class Register
    Inherits System.Web.UI.Page
    Dim fName As String = String.Empty
    Dim lName As String = String.Empty
    Dim userEmail As String = String.Empty
    Dim userAddress As String = String.Empty
    Dim userCity As String = String.Empty
    Dim userState As String = String.Empty
    Dim userZip As Integer = 0
    Dim userPhone As String = String.Empty
    Dim userCompany As String = String.Empty
    Dim uName As String = String.Empty
    Dim userPass As String = String.Empty
    Dim userId As Integer = 0

    Protected Sub registerButton_Click(sender As Object, e As EventArgs) Handles registerButton.Click

        'load variables
        fName = firstName.Text
        lName = lastName.Text
        userEmail = email.Text
        userAddress = address.Text
        userCity = city.Text
        userState = state.Text
        userZip = zip.Text
        userPhone = phone.Text
        userCompany = company.Text
        uName = username.Text
        userPass = password.Text

        ' Check to see if username is unique
        If isUnique(uName, userEmail) = True Then
            Dim con As SqlConnection
            Dim cdm As SqlCommand
            ' Insert the customer details into the table
            con = New SqlConnection("server=(local);Integrated Security=SSPI;database=radioactive_db; ")
            con.Open()
            cdm = New SqlCommand("INSERT INTO Customers(customer_company, customer_addr, customer_city, customer_state, customer_zip, customer_phone, customer_contact_Fname, customer_contact_Lname, customer_email) VALUES('" & userCompany & "', '" & userAddress & "', '" & userCity & "', '" & userState & "', '" & userZip & "', '" & userPhone & "', '" & fName & "', '" & lName & "', '" & userEmail & "');", con)
            cdm.ExecuteNonQuery()
            cdm.Dispose()
            ' Insert the credentials into the DB
            cdm = New SqlCommand("INSERT INTO Customer_Credentials(cc_user_name, cc_password, cc_customer_ID) VALUES('" & uName & "', '" & userPass & "', " & GetUserID(userEmail) & ");", con)
            cdm.ExecuteNonQuery()
            con.Dispose()
            cdm.Dispose()
            ' Remove the ID cookie from storage
            Response.Redirect("~/Login.aspx")
        Else
            Response.Redirect("~/Register.aspx", True)
        End If
    End Sub
    Private Function GetUserID(ByVal email As String) As String
        Dim conn As SqlConnection
        Dim cmd As SqlCommand
        Dim lookupUserID As String = Nothing

        ' Check for an invalid username
        ' userName must not be set to nothing and must be between 1 and 15 characters
        If ((email Is Nothing)) Then
            Diagnostics.Trace.WriteLine("[ValidateUser] Input validation of userName failed.")
            Return False
        End If
        If ((email.Length = 0) Or (email.Length > 50)) Then
            Diagnostics.Trace.WriteLine("[ValidateUser] Input validation of userName failed.")
            Return False
        End If
        Try
            ' Consult with your SQL Server administrator for an appropriate connection
            ' string to use to connect to your local SQL Server.
            conn = New SqlConnection("server=(local);Integrated Security=SSPI;database=radioactive_db")
            conn.Open()

            ' Create SqlCommand to select customerID field from the Customers table given a supplied EMail.
            cmd = New SqlCommand("Select customer_ID from Customers where customer_email=@email", conn)
            cmd.Parameters.Add("@email", SqlDbType.VarChar, 50)
            cmd.Parameters("@email").Value = email

            lookupUserID = cmd.ExecuteScalar

            ' Cleanup command and connection objects.
            cmd.Dispose()
            conn.Dispose()
        Catch ex As Exception
            ' Add error handling here for debugging.
            ' This error message should not be sent back to the caller.
            System.Diagnostics.Trace.WriteLine("[ValidateUser] Exception " & ex.Message)
        End Try

        Return lookupUserID
    End Function
    Protected Function isUnique(ByRef userName As String, ByRef uEmail As String) As Boolean
        Dim conn As SqlConnection
        Dim cmd As SqlCommand
        Dim lookupUsername As Integer = Nothing
        Dim lookupUserEmail As Integer = Nothing

        Try
            ' Consult with your SQL Server administrator for an appropriate connection
            ' string to use to connect to your local SQL Server.
            conn = New SqlConnection("server=(local);Integrated Security=SSPI;database=radioactive_db")
            conn.Open()

            ' Create SqlCommand to count the number of users in a table that have the specified username
            cmd = New SqlCommand("Select Count(*) cc_user_name from Customer_Credentials where cc_user_name=@userName", conn)
            cmd.Parameters.Add("@userName", SqlDbType.Char, 25)
            cmd.Parameters("@userName").Value = userName


            ' Execute command and fetch pwd field into lookupPassword string.
            lookupUsername = cmd.ExecuteScalar()

            ' Cleanup command and connection objects.
            cmd.Dispose()
            ' Create SqlCommand to count the number of users in a table that have the specified email
            cmd = New SqlCommand("Select Count(*) customer_email from Customers where customer_email = @uEmail", conn)
            cmd.Parameters.Add("@uEmail", SqlDbType.Char, 50)
            cmd.Parameters("@uEmail").Value = uEmail

            ' Execute command and fetch pwd field into lookupemail string
            lookupUserEmail = cmd.ExecuteScalar
            ' Cleanup command and connection objects.
            cmd.Dispose()
            conn.Dispose()

        Catch ex As Exception
            ' Add error handling here for debugging.
            ' This error message should not be sent back to the caller.
            Diagnostics.Trace.WriteLine("[UniqueUser] Exception " & ex.Message)
        End Try
        ' Check to see if the number of usernames in the database is equal to 0 and if it is return true
        If lookupUsername = 0 AndAlso lookupUserEmail = 0 Then
            Return True
        Else ' If not return false
            Return False
        End If
    End Function
End Class
