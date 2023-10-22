<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="AnaBilimDali.aspx.cs" Inherits="MUAYENE_TAKIP.AnaBilimDali" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
         <div>
            <table class="auto-style1">
                <tr>
                    <td class="auto-style2">Adı</td>
                    <td>
                        <asp:TextBox ID="txtAdi" runat="server"></asp:TextBox>
                    </td>
                </tr>
                <tr>
                    <td class="auto-style2">Açıklama</td>
                    <td>
                        <asp:TextBox ID="txtAciklama" runat="server" TextMode="MultiLine"></asp:TextBox>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <asp:Button ID="btnKaydet" runat="server" Text="KAYDET" OnClick="btnKaydet_Click1" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                    </td>
                    <td>
                        <asp:Label ID="lblMesaj" runat="server"></asp:Label>
                    </td>
                </tr>
            </table>
        </div>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <asp:GridView ID="gridListe" runat="server" AutoGenerateColumns="False" DataKeyNames="ANABİLİMDALİİD" GridLines="None" Height="188px" Width="440px" OnRowCommand="gridListe_RowCommand1" OnSelectedIndexChanged="gridListe_SelectedIndexChanged">
             <Columns>
                 <asp:BoundField DataField="ADI" HeaderText="ANABILIMDALI ADI" />
                 <asp:BoundField DataField="ACIKLAMA" HeaderText="ACIKLAMA" />
                 <asp:ButtonField ButtonType="Button" CommandName="GUNCELLE" Text="GUNCELLE" />
                 <asp:ButtonField ButtonType="Button" CommandName="SIL" Text="SIL" />
             </Columns>
         </asp:GridView>
    </form>
</body>
</html>
