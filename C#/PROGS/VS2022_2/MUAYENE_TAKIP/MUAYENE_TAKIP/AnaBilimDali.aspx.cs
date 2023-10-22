using MUAYENE_TAKIP.DBOBJECT;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace MUAYENE_TAKIP
{
    public partial class AnaBilimDali : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if(!IsPostBack)
            {
                ;
            }
        }
        private void VeriKaydet()
        {
            using (DBOBJECT.DBMUAYENETAKIPEntities DBContext = new DBOBJECT.DBMUAYENETAKIPEntities())
            {
                ANABILIMDALI aNABILIMDALI = new ANABILIMDALI();
                aNABILIMDALI.ADI = txtAdi.Text;
                if(aNABILIMDALI.ACIKLAMA!=String.Empty)
                {
                    aNABILIMDALI.ACIKLAMA = txtAciklama.Text;
                }
                else
                {
                    aNABILIMDALI.ACIKLAMA = null;
                }
                DBContext.ANABILIMDALI.Add(aNABILIMDALI);
                DBContext.SaveChanges();
            }

            lblMesaj.Text = "Veri Kaydedildi";
        }
        private void VeriListele()
        {
            using(DBOBJECT.DBMUAYENETAKIPEntities DBContext = new DBOBJECT.DBMUAYENETAKIPEntities())
            {
                List<ANABILIMDALI> aNABILIMDALIListe = DBContext.ANABILIMDALI.ToList();
                gridListe.DataSource=aNABILIMDALIListe;
                gridListe.DataBind();
            }
        }
        private void VeriSil(int ID)
        {
            using (DBOBJECT.DBMUAYENETAKIPEntities DBContext = new DBOBJECT.DBMUAYENETAKIPEntities())
            {
                ANABILIMDALI aNABILIMDALI = 
                    DBContext.ANABILIMDALI.Where(x => x.ANABILIMDALIID == ID).FirstOrDefault();
                DBContext.ANABILIMDALI.Remove(aNABILIMDALI);
                DBContext.SaveChanges();
            }
        }

        private void VeriSec(int ID)
        {
            try
            {
                using (DBOBJECT.DBMUAYENETAKIPEntities DBContext 
                    = new DBMUAYENETAKIPEntities)
                {
                    ANABILIMDALI aNABILIMDALI = 
                        DBContext.ANABILIMDALI.Where(x=> x.ANABILIMDALIID ==ID).FirstOrDefault();

                    txtAdi.Text = aNABILIMDALI.ADI;
                    if (ANABILIMDALI.ACIKLAMA != null)
                        txtAciklama.Text = aNABILIMDALI.ACIKLAMA;

                    btnKayde

                }

            }
        }

    }
}