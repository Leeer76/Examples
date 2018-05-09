<%@ Page Title="" Language="VB" MasterPageFile="~/login/site.master" AutoEventWireup="false" CodeFile="ViewAllTickets.aspx.vb" Inherits="Tickets_ViewTickets" %>


<asp:Content ID="ViewAllTickets" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div id="allTickets">
        <div class="search">
            <asp:textbox runat="server"  ID="searchText" CssClass="searchTxt" placeholder ="Enter Ticket Number..."></asp:textbox>
            <asp:button runat="server" ID="searchBtn" CssClass="searchBtn" text="Search" />
        </div>
        <div id="Alltable" runat="server">

        </div>
    </div>
</asp:Content>

