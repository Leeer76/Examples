<%@ Page Title="" Language="VB" MasterPageFile="~/login/site.master" AutoEventWireup="false" CodeFile="SubmitTicket.aspx.vb" Inherits="Tickets_SubmitTicket" %>

<asp:Content ID="Main" runat="server" ContentPlaceHolderID="ContentPlaceHolder1">
    <div id="sbmTxt">
        <p class="center">WE ARE SORRY FOR ANY INCONVEINIENCE TIS SYSTEM ISSUE HAS CAUSED YOU PLEASE ENTER DETAILD DESCRIPTION OF THE ERROR BELOW. A TECHNICIAN WILL REVIEW THIS ISSUE SHORTLY AND FIND A WAY TO RESOLVE THIS ISSUSE</p>
        <p class="center">
            <asp:DropDownList ID="issueTypeDropDownList" CssClass="type" runat="server" DataSourceID="SqlDataSource1" DataTextField="description" DataValueField="issue_type"></asp:DropDownList>
            <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:radioactive_dbConnectionString2 %>" SelectCommand="SELECT * FROM [Issue_Type]"></asp:SqlDataSource>
        </p>
        <p>
            <asp:TextBox ID="descriptionTextBox" CssClass="txtSub" runat="server" TextMode="MultiLine" Text="Enter Issue..." MaxLength="7000"></asp:TextBox>
        </p>
        
        <p class="center">
            <asp:Button ID="submitButton" CssClass="subBtn" runat="server" Text="Submit Ticket" />
        </p>
    </div>
</asp:Content>


