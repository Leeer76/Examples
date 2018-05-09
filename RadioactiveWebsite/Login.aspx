<%@ Page Title="" Language="VB" MasterPageFile="~/Site.master" AutoEventWireup="false" CodeFile="Login.aspx.vb" Inherits="Login" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   <div class="container">
        <div id="login">
            <asp:Label ID="usernameLabel" CssClass="logLabel block" runat="server" Text="Username:"></asp:Label>
            <asp:RequiredFieldValidator ID="RequiredFieldValidator1" CssClass="error" runat="server" ErrorMessage="*" ControlToValidate="userName" ForeColor="#e4e526"></asp:RequiredFieldValidator>
            <asp:TextBox ID="userName" CssClass="logTxt block" runat="server"></asp:TextBox>
            <asp:Label ID="passwordLabel" CssClass="logLabel block" runat="server" Text="Password:"></asp:Label>
            <asp:RequiredFieldValidator ID="RequiredFieldValidator2" CssClass="error" runat="server" ErrorMessage="*" ForeColor="#e4e526" ControlToValidate="passWord"></asp:RequiredFieldValidator>
            <asp:TextBox ID="passWord" CssClass="logTxt block" runat="server" TextMode="Password"></asp:TextBox>
            <asp:CheckBox ID="rememberCheck" CssClass="logLabel block" runat="server" Text="Remember Me" />
            <a id="create" style="color:#e4e526" href="Register.aspx">Create Account</a>
            <asp:Button ID="submitButton" CssClass="logBtn" runat="server" Text="Login" />
       </div>
   </div>
</asp:Content>


