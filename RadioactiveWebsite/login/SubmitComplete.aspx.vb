
Imports System

Partial Class Tickets_SubmitComplete
    Inherits System.Web.UI.Page

    Private Sub Tickets_SubmitComplete_Load(sender As Object, e As EventArgs) Handles Me.Load
        If Not IsPostBack Then
            If Request.Cookies("userNameStorage") Is Nothing Then
                Response.Redirect("../Login.aspx")
            End If
        End If
    End Sub
End Class
