<%@ Page Title="" Language="VB" MasterPageFile="~/site.master" AutoEventWireup="false" CodeFile="contact.aspx.vb" Inherits="contact" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <h1 class="title contact">Contact Us</h1> 
    <div id="map">
     
    </div>
    
    <div class="cInfo">
        <div class="contact">
            <h2 class="title sales">Sales</h2>
            <table class="cTable">
                <tr>
                    <td class="bold">
                        Phone:
                    </td>
                    <td class="norm">
                        1-605-882-5555
                    </td>
                </tr>
                <tr>
                    <td class="bold">
                        Email:
                    </td>
                    <td class="norm">
                        sales@radioactivesoftware.com
                    </td>
                </tr>
            </table>
        </div>

        <div class="contact">
            <h2 class="title">Customer Service</h2>
            <table class="cTable">
                <tr>
                    <td class="bold">
                        Phone:
                    </td>
                    <td class="norm">
                        1-800-882-5554
                    </td>
                </tr>
                <tr>
                    <td class="bold">
                        Email:
                    </td>
                    <td class="norm">
                        customerservice@radioactivesoftware.com
                    </td>
                </tr>
            </table>
        </div>
    </div>
    

    <script>
        //google map function
        function myMap() {
            var mapOptions = {
                center: new google.maps.LatLng(44.9011, -97.0953),
                zoom: 17
            }
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(44.9011, -97.0953),
                map: map
            });
        }
        
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key="Enter Key Here"&callback=myMap"></script>

</asp:Content>

