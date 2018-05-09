Imports System.Data
Imports System.Data.SqlClient

Partial Class Tickets_SubmitTicket
    Inherits Page
    Dim type As String = String.Empty
    Dim issue As String = String.Empty
    Dim uID As String = String.Empty

    Protected Sub SubmitButton_Click(sender As Object, e As EventArgs) Handles submitButton.Click
        uID = Request.Cookies("UserNameStorage").Value.ToString
        issue = descriptionTextBox.Text
        type = issueTypeDropDownList.SelectedIndex

        If type = 0 Then
            type = "NI"
        Else
            type = "PI"
        End If

        InsertTicket(uID, issue, type)
        Response.Redirect("SubmitComplete.aspx")
    End Sub

    Private Sub Tickets_SubmitTicket_Load(sender As Object, e As EventArgs) Handles Me.Load
        If IsPostBack Then
            If Request.Cookies("UserNameStorage").Value Is Nothing Then
                Response.Redirect("../Login.aspx")
            End If
        End If
    End Sub
    Private Sub InsertTicket(ByVal userID As String, ByVal description As String, ByVal issueType As String)
        Dim conn As SqlConnection
        Dim cmd As SqlCommand

        Try
            ' Consult with your SQL Server administrator for an appropriate connection
            ' string to use to connect to your local SQL Server.

            Using con As New SqlConnection("server=localhost;Integrated Security=SSPI;database=radioactive_db")
                Using cdm As New SqlCommand("EXEC spInsertTicket @user = '" & userID & "', @ISSUE = '" & issueType & "', @DESC = '" & description.Replace("'", "''") & "';")
                    Using sda As New SqlDataAdapter()
                        cdm.Connection = con
                        sda.SelectCommand = cdm
                        Using dt As New DataSet()
                            sda.Fill(dt)
                            sda.Update(dt)
                        End Using
                        ' Cleanup command and connection objects.
                        cdm.Dispose()
                        con.Dispose()
                    End Using
                End Using
            End Using
        Catch ex As Exception
            ' Add error handling here for debugging.
            ' This error message should not be sent back to the caller.
            Diagnostics.Trace.WriteLine("[Insert] Exception " & ex.Message)
        End Try
    End Sub

End Class
