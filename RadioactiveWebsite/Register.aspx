<%@ Page Title="" Language="VB" MasterPageFile="~/site.master" AutoEventWireup="false" CodeFile="Register.aspx.vb" Inherits="Register" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table class="acctTable">
        <tr>
            <th colspan="2"><h2>Customer Information</h2></th>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label3" runat="server" Text="First Name:"></asp:Label></td>
            <td><asp:TextBox ID="firstName" class="txtBox" runat="server" MaxLength="50"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label4" runat="server" Text="Last Name:"></asp:Label></td>
            <td><asp:TextBox ID="lastName" class="txtBox" runat="server" MaxLength="50"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label5" runat="server" Text="Email:"></asp:Label></td>
            <td><asp:TextBox ID="email" class="txtBox" runat="server" MaxLength="50"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label6" runat="server" Text="Address:"></asp:Label></td>
            <td><asp:TextBox ID="address" class="txtBox longTxt" runat="server" MaxLength="200"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label7" runat="server" Text="City:"></asp:Label></td>
            <td><asp:TextBox ID="city" class="txtBox longTxt" runat="server" MaxLength="100"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label8" runat="server">State:</asp:Label></td>
            <td><asp:TextBox ID="state" class="txtBox" runat="server" MaxLength="2"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label9" runat="server" Text="Zip:"></asp:Label></td>
            <td><asp:TextBox ID="zip" class="txtBox" runat="server" MaxLength="5"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label10" runat="server" Text="Phone:"></asp:Label></td>
            <td><asp:TextBox ID="phone" class="txtBox" runat="server" MaxLength="14" placeholder="(XXX)-XXX-XXXX"></asp:TextBox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label11" runat="server" Text="Company:"></asp:Label></td>
            <td><asp:TextBox ID="company" class="txtBox longTxt" runat="server" MaxLength="100"></asp:TextBox></td>
        </tr>
        <tr>
            <th colspan="2"><h2>User Credentials</h2></th>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label1" runat="server" Text="User Name:"></asp:Label></td>
            <td><asp:textbox runat="server" ID="username" class="txtBox" MaxLength="25"></asp:textbox></td>
        </tr>
        <tr>
            <td class="register"><asp:Label ID="Label2" runat="server" Text="Password:"></asp:Label></td>
            <td><asp:TextBox ID="password" class="txtBox" runat="server" MaxLength="25" TextMode="Password"></asp:TextBox></td>
        </tr>
        <tr>
            <td></td>
            <td><asp:Button ID="registerButton" runat="server" Text="Register" Class="regBtn" /></td>
        </tr>
    </table>
</asp:Content>



