<%@ Page Title="" Language="VB" MasterPageFile="~/site.master" AutoEventWireup="false" CodeFile="products.aspx.vb" Inherits="products" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
   <div class="productPG">
    <h1 class="title">Products</h1>
    <div class="products">
        <img id="football" class="product" src="RadioactiveSoftware/images/box01.png" />
        <img id="reactor" class="product" src="RadioactiveSoftware/images/box02.png" />
        <img id="fallout" class="product" src="RadioactiveSoftware/images/box03.png" />
    </div>

    <h1 class="prodName"></h1>
    <div id="productDetail" class="prodDetail">
        <table class="prodDetail">
            <tr>
                <th><h2>Description</h2></th>
                <th class="right"><h2>Specs</h2></th>
                <th></th>
            </tr>
            <tr>
                <td id="desc" rowspan="7"></td>
                <td class="spec right">User Capcity:</td>
                <td class="spec left"></td>
            </tr>
            <tr>
               <td class="spec right">Operating System:</td>
               <td class="spec left"></td> 
            </tr>
            <tr>
               <td class="spec right">Cloud Storage:</td>
               <td class="spec left"></td> 
            </tr>
            <tr>
               <td class="spec right">Processor Speed:</td>
               <td class="spec left"></td> 
            </tr>
            <tr>
               <td class="spec right">Memory (RAM):</td>
               <td class="spec left"></td> 
            </tr>
            <tr>
               <td class="spec right">Graphics Card:</td>
               <td class="spec left"></td> 
            </tr>
            <tr>
               <td class="spec right">Hard Disk Space:</td>
               <td class="spec left"></td> 
            </tr>
        </table>
    </div>
       </div>
</asp:Content>

