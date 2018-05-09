Imports System.Data
Imports System.Data.SqlClient
Partial Class Tickets_ViewOpenTickets
    Inherits System.Web.UI.Page
    Dim outPut As String
    Protected Sub page_load(sender As Object, e As EventArgs) Handles Me.Load

        'check if valid user
        Dim username As String = Request.Cookies("UserNameStorage").Value
        If username IsNot String.Empty AndAlso userCheck(username) IsNot String.Empty Then
            If Not Me.IsPostBack Then
                Dim dt As DataTable = Me.GetData()
                Dim html As New StringBuilder


                For Each row As DataRow In dt.Rows
                    html.Append("<table class='ticketTable tbData'>")
                    html.Append("<tr class='tableHead'>")
                    For Each header As DataColumn In dt.Columns
                        html.Append("<th>")
                        html.Append(header.ColumnName)
                        html.Append("</th>")
                    Next
                    html.Append("</tr>")
                    html.Append("<tr>")
                    For Each column As DataColumn In dt.Columns
                        html.Append("<td class='tdData'>")
                        html.Append(row(column.ColumnName))
                        html.Append("</td>")
                    Next
                    html.Append("</tr>")
                    html.Append("</table>")
                Next

                outPut = html.ToString

                OpenTable.Controls.Add(New Literal() With {
                                   .Text = outPut})
            End If
        Else
            Request.Cookies("person").Value = String.Empty
            Request.Cookies("UserNameStorage").Value = String.Empty
            Response.Redirect("../Login.aspx")

        End If
    End Sub

    Private Sub searchBtn_Click(sender As Object, e As EventArgs) Handles searchBtn.Click
        Dim criteria As String
        Dim dt As DataTable
        Dim html As New StringBuilder

        criteria = searchText.Text
        dt = getDataSearch(criteria)

        If dt.Rows.Count = 0 Then
            dt = Me.GetData()
        End If

        For Each row As DataRow In dt.Rows
            html.Append("<table class='ticketTable tbData'>")
            html.Append("<tr class='tableHead'>")
            For Each header As DataColumn In dt.Columns
                html.Append("<th>")
                html.Append(header.ColumnName)
                html.Append("</th>")
            Next
            html.Append("</tr>")
            html.Append("<tr>")
            For Each column As DataColumn In dt.Columns
                html.Append("<td class='tdData'>")
                html.Append(row(column.ColumnName))
                html.Append("</td>")
            Next
            html.Append("</tr>")
            html.Append("</table>")
        Next

        outPut = html.ToString

        OpenTable.Controls.Add(New Literal() With {
                           .Text = outPut})

    End Sub

    Private Function getDataSearch(ByRef var As String) As DataTable
        Dim userid As String = Request.Cookies("UserNameStorage").Value
        Using con As New SqlConnection("server=localhost;Integrated Security=SSPI;database=radioactive_db")
            Using cdm As New SqlCommand("EXEC spOpenTicketsSearch @user = '" & userid & "', @Input = '" & var & "';")
                Using sda As New SqlDataAdapter()
                    cdm.Connection = con
                    sda.SelectCommand = cdm
                    Using dt As New DataTable()
                        sda.Fill(dt)
                        Return dt
                    End Using
                End Using
            End Using
        End Using

    End Function

    Private Function GetData() As DataTable
        Dim userid As String = Request.Cookies("UserNameStorage").Value
        Using con As New SqlConnection("server=localhost;Integrated Security=SSPI;database=radioactive_db")
            Using cdm As New SqlCommand("EXEC spOpenTickets @user = '" & userid & "';")
                Using sda As New SqlDataAdapter()
                    cdm.Connection = con
                    sda.SelectCommand = cdm
                    Using dt As New DataTable()
                        sda.Fill(dt)
                        Return dt
                    End Using
                End Using
            End Using
        End Using

    End Function

    Private Function userCheck(user As String) As DataTable
        Using con As New SqlConnection("server=localhost;Integrated Security=SSPI;database=radioactive_db")
            Using cdm As New SqlCommand("EXEC spUser @user = '" & user & "';")
                Using sda As New SqlDataAdapter()
                    cdm.Connection = con
                    sda.SelectCommand = cdm
                    Using dt As New DataTable()
                        sda.Fill(dt)
                        Return dt
                    End Using
                    con.Dispose()
                    cdm.Dispose()
                    sda.Dispose()
                End Using
            End Using
        End Using

    End Function
End Class
