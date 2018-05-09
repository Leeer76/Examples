Imports System.Data
Imports System.Data.SqlClient
Imports System.Web.Security


Partial Class Login
    Inherits Page
    Private Function ValidateUser(ByVal userName As String, ByVal passWord As String) As Boolean
        Dim conn As SqlConnection
        Dim cmd As SqlCommand
        Dim lookupPassword As String = Nothing

        ' Check for an invalid username
        ' userName must not be set to nothing and must be between 1 and 15 characters
        If ((userName Is Nothing)) Then
            Diagnostics.Trace.WriteLine("[ValidateUser] Input validation of userName failed.")
            Return False
        End If
        If ((userName.Length = 0) Or (userName.Length > 30)) Then
            Diagnostics.Trace.WriteLine("[ValidateUser] Input validation of userName failed.")
            Return False
        End If

        ' Check for invalid passWord
        ' passWord must not be set to nothing and must be between one and 25 characters.
        If ((passWord Is Nothing)) Then
            Diagnostics.Trace.WriteLine("[ValidateUser] Input validation of passWord failed.")
            Return False
        End If
        If ((passWord.Length = 0) Or (passWord.Length > 30)) Then
            Diagnostics.Trace.WriteLine("[ValidateUser] Input validation of passWord failed.")
            Return False
        End If

        Try
            ' Consult with your SQL Server administrator for an appropriate connection
            ' string to use to connect to your local SQL Server.
            conn = New SqlConnection("server=localhost;Integrated Security=SSPI;database=radioactive_db")
            conn.Open()

            ' Create SqlCommand to select cc_password field from the Customer_Credentials table given a supplied userName.
            cmd = New SqlCommand("Select cc_password from Customer_Credentials where cc_user_name=@userName", conn)
            cmd.Parameters.Add("@userName", SqlDbType.VarChar, 25)
            cmd.Parameters("@userName").Value = userName


            ' Execute command and fetch pwd field into lookupPassword string.
            lookupPassword = cmd.ExecuteScalar()

            ' Cleanup command and connection objects.
            cmd.Dispose()
            conn.Dispose()
        Catch ex As Exception
            ' Add error handling here for debugging.
            ' This error message should not be sent back to the caller.
            System.Diagnostics.Trace.WriteLine("[ValidateUser] Exception " & ex.Message)
        End Try

        ' If no password found, return false.
        If (lookupPassword Is Nothing) Then
            ' You could write failed login attempts here to the event log for additional security.
            Return False
        End If

        ' Compare lookupPassword and input passWord by using a case-sensitive comparison.
        Return (String.Compare(lookupPassword, passWord, False) = 0)
    End Function

    Protected Sub submitButton_Click(sender As Object, e As EventArgs) Handles submitButton.Click

        ' Run a check to see if the username and password are valid
        If ValidateUser(userName.Text, passWord.Text) Then
            ' If they are then create and assign values to the cookies
            Dim NameCookie As New HttpCookie("UserNameStorage", userName.Text)
            Dim person As New HttpCookie("person")
            person.Value = GetUserID(userName.Text)
            ' Check to see if we should keep the cookie in browsers cookie store
            If rememberCheck.Checked = True Then
                ' If so add a month to the cookie epiry date
                NameCookie.Expires = Now.AddMonths(1)
                person.Expires = Now.AddMonths(1)
            Else
                ' If not only keep the cookie for an hour
                NameCookie.Expires = Now.AddHours(1)
                person.Expires = Now.AddHours(1)
            End If
            ' Add the cookie to the browser store
            Response.Cookies.Add(NameCookie)
            Response.Cookies.Add(person)
            ' Redirect to the Tickets view
            Response.Redirect("login/ViewAllTickets.aspx", True)
        Else
            ' If the username and password do not validate then go back to the login page
            Response.Redirect("Login.aspx", True)
        End If
    End Sub

    Private Function GetUserID(ByVal userName As String) As String
        Dim conn As SqlConnection
        Dim cmd As SqlCommand
        Dim lookupUserID As String = Nothing

        ' Check for an invalid username
        ' userName must not be set to nothing and must be between 1 and 15 characters
        If ((userName Is Nothing)) Then
            Diagnostics.Trace.WriteLine("[ValidateUser] Input validation of userName failed.")
            Return False
        End If
        If ((userName.Length = 0) Or (userName.Length > 15)) Then
            Diagnostics.Trace.WriteLine("[ValidateUser] Input validation of userName failed.")
            Return False
        End If
        Try
            ' Consult with your SQL Server administrator for an appropriate connection
            ' string to use to connect to your local SQL Server.
            conn = New SqlConnection("server=localhost;Integrated Security=SSPI;database=radioactive_db")
            conn.Open()

            ' Create SqlCommand to select contact_Fname field from the Customers table given a supplied userName.
            cmd = New SqlCommand("SELECT customer_contact_Fname FROM Customer_Credentials cc JOIN Customers c ON cc.cc_customer_ID = c.customer_ID WHERE cc_user_name = '" & userName & "';", conn)


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

    Private Sub Login_PreLoad(sender As Object, e As EventArgs) Handles Me.PreLoad
        ' Check to see if the cookies already exist
        If Request.Cookies("UserNameStorage") IsNot Nothing Or Request.Cookies("person") IsNot Nothing Then
            ' Remove the cookies from the browsers cookie store
            Response.Cookies("UserNameStorage").Value = String.Empty
            Response.Cookies("person").Value = String.Empty
        End If
    End Sub
End Class
