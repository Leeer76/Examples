<%@ Page Title="" Language="VB" MasterPageFile="~/site.master" AutoEventWireup="false" CodeFile="index.aspx.vb" Inherits="_Default" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <div id="slider">
        <ul class="sliderItems">
            <li class="sliderItem"><img src="RadioactiveSoftware/images/slider01.png" alt="slider01" /></li>
            <li class="sliderItem"><img src="RadioactiveSoftware/images/slider03.jpg" alt="slider03" /></li>
            <li class="sliderItem"><img src="RadioactiveSoftware/images/slider02.png" alt="slider02" /></li>
            <li class="sliderItem"><img src="RadioactiveSoftware/images/slider01.png" alt="slider01" /></li>
        </ul>
    </div>
    <div id="indexBlock1" class="index">
        <img id="indexPhoto1" src="RadioactiveSoftware/images/elegant_work.jpg" alt="Working Hard" />
        <h2 class="indexH2">NEW</h2>
        <p class="bodyText">
            Check out our newest client server software service to our loyal customers by clicking on the "CUSTOMER" link at the top.
        </p>
    </div>
    <div id="indexBlock2" class="index">
        <h2 class="indexH2">Updates</h2>
        <p id="download" class="bodyText">
            <a href="RadioactiveSoftware/downloads/mock.exe.jpg" download="mock.exe.jpg">nuclear_football_classic_edition_version_1.1.2</a>
            <a href="RadioactiveSoftware/downloads/mock.exe.jpg" download="mock.exe.jpg">reactor_meltdown_version_1.1.17</a>
            <a href="RadioactiveSoftware/downloads/mock.exe.jpg" download="mock.exe.jpg">nuclear_fallout_springfield_edition_version_1.1.5</a>
        </p>
    </div>
</asp:Content>

