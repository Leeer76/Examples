<%@ Page Title="" Language="VB" MasterPageFile="~/login/site.master" AutoEventWireup="false" CodeFile="ViewOpenTickets.aspx.vb" Inherits="Tickets_ViewOpenTickets" %>


<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div id="openTicket">
        <div class="search">
            <asp:textbox runat="server" ID="searchText" CssClass="searchTxt" placeholder ="Enter Ticket Number..."></asp:textbox>
            <asp:button runat="server" ID="searchBtn" CssClass="searchBtn" text="Search" />
        </div>
        <div id="OpenTable" runat="server">

        </div>    

    </div>
</asp:Content>


