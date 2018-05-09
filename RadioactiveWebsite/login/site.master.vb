Partial Class site
    Inherits System.Web.UI.MasterPage

    Private Sub site_Load(sender As Object, e As EventArgs) Handles Me.Load
        Dim person As String = Request.Cookies("person").Value
        username.Controls.Add(New Literal With {
                              .Text = person})
    End Sub
End Class

