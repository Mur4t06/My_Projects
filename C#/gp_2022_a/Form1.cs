using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace gp_2022_a
{
    public partial class Form1 : Form
    {
        //Genel Değişkenler
        int degisken1;
        int degis2, degis3;
        int degis4 = 9;

        string metin, ikinci;
        string metin2 = "hitit";
        bool deger;
        bool deger2 = true;
        char deger3;
        double deger4 = 2.15;
        float deger5;
        int sayi_program;
        int sayac = 0;

        // Matemetiksel operatörler + - * /

        public Form1()
        {
            InitializeComponent();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            int veri =Convert.ToInt32( textBox1.Text);
            MessageBox.Show(Convert.ToString( veri));
        }

        private void button3_Click(object sender, EventArgs e)
        {
            // kullanıcıdan 1. sayıyı al
            int sayi1 =Convert.ToInt32(txt_o2_1.Text);
            // kullanıcıdan 2. sayıyı al
            int sayi2 = Convert.ToInt32(txt_o2_2.Text);
            // sayi1 ve sayi2 yi topla
            int topla = sayi1 + sayi2;
            // sonucu meaj olarak yazdır
            //MessageBox.Show(Convert.ToString(topla));
            txt_02_3.Text = Convert.ToString(topla);
        }

        private void button7_Click(object sender, EventArgs e)
        {
            // if yapısı ve mantıksal öperatörler 
            // && (ve) || (veya) == (eşitlik) != (eşit değil)
            //Yapı 1
            if (true)
            {

            }
            //Yapı 2
            if (true)
            {
            }
            else
            {
            }
            //yapı 3
            if (3<5 && 6<9)
            {
                MessageBox.Show("İf yapısı içerisindeyiz");
            }
            else if (false)
            {

            }
            else if (false)
            {

            }
            else
            {
                MessageBox.Show("else blogu içerisindeyiz");
            }

           // girilen 2 sayıdan büyük olanını mesaj olarak 
           //veren bir program yazınız ?


        }

        private void button8_Click(object sender, EventArgs e)
        {
            if ((txt_o3_1.Text != "") && (txt_o3_2.Text != ""))
            {
                int sayi1 = Convert.ToInt32(txt_o3_1.Text);
                int sayi2 = Convert.ToInt32(txt_o3_2.Text);

                if (sayi1 > sayi2)
                {
                    MessageBox.Show(Convert.ToString(sayi1));
                }
                else if (sayi1 < sayi2)
                {
                    MessageBox.Show(Convert.ToString(sayi2));
                }
                else
                {
                    MessageBox.Show("Girilen Sayılar Eşittir");
                }

            }
            else
            {
                MessageBox.Show("eksik sayı girildi");
            }
        }

        private void button9_Click(object sender, EventArgs e)
        {
            // matematiksel operatör Mod %
            // 5 % 4 = 1
            int sayi1 = 7;
            int sayi2 = 5;
            int sonuc = 7 % 5;
            MessageBox.Show("Sonuç : " + sonuc);
        }

        private void button10_Click(object sender, EventArgs e)
        {
           

            if (txt_o4_1.Text == "")
            {
                MessageBox.Show("1. Sayı Girilmedi");
            }
            else if (txt_o4_2.Text=="")
            {
                MessageBox.Show("2. Sayı Girilmedi");
            }
            else
            {
                int sayi1 = Convert.ToInt32(txt_o4_1.Text);
                int sayi2 = Convert.ToInt32(txt_o4_2.Text);
                int sonuc = sayi1 % sayi2;
                MessageBox.Show("Sonuc : " + sonuc);
            }

            

        }

        private void button11_Click(object sender, EventArgs e)
        {
            if (txt_o5.Text=="")
            {
                MessageBox.Show("Lütfen Bir Sayı Girin");
            }
            else
            {
                int sayi = Convert.ToInt32(txt_o5.Text);
                int sonuc = sayi % 2;

                if (sonuc == 0)
                {
                    MessageBox.Show("Sayı Çift");
                }
                else
                {
                    MessageBox.Show("Sayı Tekdir");
                }
            }
        }

        private void button12_Click(object sender, EventArgs e)
        {
            // FOR Döngüsü
            int tpl = 0;
            for (int i=1; i<5; i=i+1)
            {
                //MessageBox.Show(Convert.ToString(i));
                tpl = tpl + i;
            }

            MessageBox.Show("Sonuç : "+tpl);

        }

        private void button13_Click(object sender, EventArgs e)
        {
            if (txt_o6.Text == "")
            {
                MessageBox.Show("Lütfen Bir Sayı Giriniz");
            }
            else
            {
                int tpl = 0;
                int sayi = Convert.ToInt32(txt_o6.Text);
                for (int i=1; i<=sayi; i=i+1)
                {
                    tpl = tpl + i;
                }
                MessageBox.Show("Sonuç : "+tpl);
            }
        }

        private void button14_Click(object sender, EventArgs e)
        {
            if ( (txt_o7_1.Text == "") || (txt_o7_2.Text == ""))
            {
                MessageBox.Show("Lütfen Sayıları Giriniz");
            }
            else
            {
                int sayi1 = Convert.ToInt32(txt_o7_1.Text);
                int sayi2 = Convert.ToInt32(txt_o7_2.Text);
                int tpl = 0;
                if (sayi1 > sayi2)
                {
                    for (int i = sayi2; i <= sayi1; i = i + 1)
                    {
                        tpl = tpl + i;
                    }
                }
                else // burada sayi 2 büyüktür
                {
                    for (int i=sayi1; i<=sayi2; i=i+1)
                    {
                        tpl = tpl + i;
                    }
                }

                //MessageBox.Show("Sonuç : "+tpl);
                txt_o7_3.Text = Convert.ToString(tpl);
            }
        }

        private void button15_Click(object sender, EventArgs e)
        {
            if ((txt_o8_1.Text == "") || (txt_o8_2.Text==""))
            {
                MessageBox.Show("Sayıları Giriniz");
            }
            else
            {
                int sayi1 = Convert.ToInt32(txt_o8_1.Text);
                int sayi2 = Convert.ToInt32(txt_o8_2.Text);
                int sayi_kucuk = 0;
                int sayi_buyuk = 0;

                if (sayi1 < sayi2)
                {
                    sayi_kucuk = sayi1;
                    sayi_buyuk = sayi2;
                }
                else
                {
                    sayi_kucuk = sayi2;
                    sayi_buyuk = sayi1;
                }

                int tpl = 0;
                for (int i=(sayi_kucuk+1); i<sayi_buyuk; i=i+1)
                {
                    if (i % 2 == 0)
                    {
                        tpl = tpl + i;
                    }
                }
                MessageBox.Show("çift Sayıların Toplamı : " + tpl );

            }
        }

        private void button16_Click(object sender, EventArgs e)
        {
            if ((txt_o9_1.Text == "") || (txt_o9_2.Text == ""))
            {
                MessageBox.Show("Eksik bilgi");
            }
            else
            {
                int sayi1 = Convert.ToInt32(txt_o9_1.Text);
                int sayi2 = Convert.ToInt32(txt_o9_2.Text);
                int sayi_kucuk = 0;
                int sayi_buyuk = 0;

                if (sayi1 < sayi2)
                {
                    sayi_kucuk = sayi1;
                    sayi_buyuk = sayi2;
                }
                else
                {
                    sayi_kucuk = sayi2;
                    sayi_buyuk = sayi1;
                }

                int sebelebettin = 0;
                for (int j=sayi_kucuk; j<=sayi_buyuk; j=j+1)
                {
                    if (j % 5 ==0 )
                    {
                        sebelebettin = sebelebettin + 1;
                    }
                }

                MessageBox.Show("5'e bölünen sayılar "+sebelebettin+" tanedir");

            }
        }

        private void button17_Click(object sender, EventArgs e)
        {
            Random rastgele = new Random();
            //int sayi = rastgele.Next();
            //int sayi = rastgele.Next(50);
            int sayi = rastgele.Next(10, 20);
            MessageBox.Show(Convert.ToString(sayi));
            
        }

        private void button18_Click(object sender, EventArgs e)
        {
            //kullanıcının girmiş oldugu degerler arasında
            //rastgele üretilen 3 sayının toplamını bulan 
            //programı yazınız?

            //Algoritması
            // 1- Başla
            // 2- Kullanıcıdan 1. sayıyı al , sayi1
            // 3- Kullanıcıdan 2. sayıyı al, sayi2
            // 4- i=1 , başla
            // 5- sayi1-sayi2 arasında rastgele sayı üret,rsayi
            // 6- toplam=toplam+rsayi
            // 7- i=i+1 , i <=20 ise 5. adıma dön
            // 8- toplamı ekrana yazdır
            // 9- Bitir,
            lb_o10.Items.Clear();
            Random rnd = new Random();
            int sayi1 = Convert.ToInt32(txt_o10_1.Text);
            int sayi2 = Convert.ToInt32(txt_o10_2.Text);
            int toplam = 0;
            for (int h=1; h<=20; h=h+1)
            {
                int rastgele_sayi = rnd.Next(sayi1, sayi2);
                lb_o10.Items.Add(rastgele_sayi);
                toplam = toplam + rastgele_sayi;
            }
            MessageBox.Show("Sayıların toplamı = "+toplam);
        }

        private void button19_Click(object sender, EventArgs e)
        {
            if (txt_o11.Text == "")
            {
                MessageBox.Show("Sayı Giriniz");
            }
            else
            {
                sayac = sayac + 1;
                int tahmin = Convert.ToInt32(txt_o11.Text);
                if (tahmin < sayi_program)
                {
                    MessageBox.Show("Lütfen Büyük Bir Sayı Giriniz");
                }
                else if (tahmin > sayi_program)
                {
                    MessageBox.Show("Lütfen Küçük Bİr Sayı Giriniz");
                }
                else
                {
                    MessageBox.Show("KAZANDINIZ Tahmin Sayısı "+sayac);
                    sayac = 0;
                }
            }
        }

        private void button20_Click(object sender, EventArgs e)
        {
            Random rnd = new Random();
            sayi_program = rnd.Next(1, 100);
            sayac = 0;
        }

        private void button21_Click(object sender, EventArgs e)
        {
            string[] dizi_s = new string[4];
            string[] dizi_s2 = { "mehmet", "akif", "bülbül" };

            bool[] dizi_b = new bool[3];
            bool[] dizi_b2 = { true, true, false, true };

            int[] a = new int[5];
            int[] b = { 1, 5, 5, 8, 3 };

           

            //MessageBox.Show(Convert.ToString(b[1]));
            b[1] = 9;
            //MessageBox.Show(Convert.ToString(b[1]));
            a[0] = 4;
            a[1] = 5;
            a[2] = 6;
            a[3] = 0;
            a[4] = 8;
            //a[5] = 5;
            MessageBox.Show("a Dizisinin Boyutu = "+a.Length);

            for (int i=0; i<a.Length; i=i+1)
            {
                MessageBox.Show(Convert.ToString(a[i]));
            }

            int tpl = 0;
            for (int k=0; k<b.Length;k=k+1)
            {
                tpl = tpl + b[k];
            }
            MessageBox.Show("b dizisi eleman toplamı = " + tpl);

        }

        private void button22_Click(object sender, EventArgs e)
        {
            /*Kullanıcının girmiş olduğu degerler arasında
           rastgele belirlenen 10 elemandan oluşan bir
           dizinin elamaları toplamını bulan progamı
           yazınız ?*/

            if (txt_o12_1.Text == "" || txt_o12_2.Text == "")
            {
                MessageBox.Show("Eksik bilgi girildi");
            }
            else
            {
                int sayi1 = Convert.ToInt32(txt_o12_1.Text);
                int sayi2 = Convert.ToInt32(txt_o12_2.Text);
                int[] dizi = new int[10];
                Random rnd = new Random();
                int sayi_kucuk = 0;
                int sayi_buyuk = 0;
                int tpl = 0;

                if (sayi1 < sayi2)
                {
                    sayi_kucuk = sayi1;
                    sayi_buyuk = sayi2;
                }
                else
                {
                    sayi_kucuk = sayi2;
                    sayi_buyuk = sayi1;
                }

                lb_o12.Items.Clear();

                for (int i=0; i<dizi.Length; i=i+1)
                {
                    dizi[i] = rnd.Next(sayi_kucuk, sayi_buyuk);
                    lb_o12.Items.Add(dizi[i]);
                    tpl = tpl + dizi[i];
                }
                //MessageBox.Show(Convert.ToString( tpl));
                lbl_o12.Text = Convert.ToString(tpl);

            }
            

        }

        private void button23_Click(object sender, EventArgs e)
        {
            /*Kullanıcının girmiş oldugu degerler arasında
            Kullanıcının girmiş olduğu eleman sayısı kadar bir dizi
            oluşturun ve bu dizideki tek sayıların sayısını bulun*/

            if (txt_o13_1.Text == "" || txt_o13_2.Text == "" || txt_o13_3.Text == "")
            {
                MessageBox.Show("Girilen degerler eksik");
            }
            else
            {
                int sayi1 = Convert.ToInt32(txt_o13_1.Text);
                int sayi2 = Convert.ToInt32(txt_o13_2.Text);
                int dizi_boyutu = Convert.ToInt32(txt_o13_3.Text);
                int[] dizi = new int[dizi_boyutu];
                Random rnd = new Random();
                int say = 0;
                int sayi_kucuk = 0;
                int sayi_buyuk = 0;

                if (sayi1 < sayi2)
                {
                    sayi_kucuk = sayi1;
                    sayi_buyuk = sayi2;
                }
                else
                {
                    sayi_kucuk = sayi2;
                    sayi_buyuk = sayi1;
                }

                for (int j=0; j<dizi.Length; j=j+1)
                {
                    dizi[j] = rnd.Next(sayi_kucuk, sayi_buyuk);
                    lb_13.Items.Add(dizi[j]);
                    if (dizi[j] % 2 == 1)
                    {
                        say = say + 1;
                    }
                }
                lbl_13.Text =Convert.ToString(say);
               
            }

        }

        private void button24_Click(object sender, EventArgs e)
        {
            /*Kullanıcnın girmş oldugu degerler arasında kullanıcının girmiş
                olduğu deger kadar rastgele çift sayılardan oluşan bir dizi oluşturun*/
            if (txt_o14_1.Text == "" || txt_o14_2.Text == "" || txt_o14_3.Text == "")
            {
                MessageBox.Show("Eksik bilgi");
            }
            else
            {
                int sayi1 = Convert.ToInt32(txt_o14_1.Text);
                int sayi2 = Convert.ToInt32(txt_o14_2.Text);
                int dizi_boyutu = Convert.ToInt32(txt_o14_3.Text);
                int[] dizi = new int[dizi_boyutu];
                Random rnd = new Random();
                int sayi_kucuk = 0;
                int sayi_buyuk = 0;
                if (sayi1 < sayi2)
                {
                    sayi_kucuk = sayi1;
                    sayi_buyuk = sayi2;
                }
                else
                {
                    sayi_kucuk = sayi2;
                    sayi_buyuk = sayi1;
                }

                for (int i=0; i<dizi.Length;i=i+1)// i=4 35
                {
                   int rs = rnd.Next(sayi_kucuk, sayi_buyuk);//35
                    if (rs % 2 == 0)
                    {
                        dizi[i] = rs;
                        lb_14.Items.Add(dizi[i]);
                    }
                    else
                    {
                        i = i - 1;
                    }
                }

            }
        }

        private void button25_Click(object sender, EventArgs e)
        {
            /*Kullanıcının girmiş olduğu degerler arasında 
            kullanıcnın girmiş olduğu deger kadar
            rastgele tek sayılardan oluşan bir dizinin
            eleman sayılarının toplamını bulan bir program yazınız ?
            */
            if (txt_o15_1.Text == "" || txt_o15_2.Text == "" || txt_o15_3.Text == "")
            {
                MessageBox.Show("Eksik bilgi girildi");
            }
            else
            {
                int sayi1 = Convert.ToInt32(txt_o15_1.Text);
                int sayi2 = Convert.ToInt32(txt_o15_2.Text);
                int dizi_boyutu = Convert.ToInt32(txt_o15_3.Text);
                int[] dizi = new int[dizi_boyutu];
                Random rnd = new Random();
                int sayi_kucuk = 0;
                int sayi_buyuk = 0;

                if (sayi1 < sayi2)
                {
                    sayi_kucuk = sayi1;
                    sayi_buyuk = sayi2;
                }
                else
                {
                    sayi_kucuk = sayi2;
                    sayi_buyuk = sayi1;
                }

                int tpl = 0;
                for (int i=0; i<dizi.Length; i=i+1)
                {
                    int rs = rnd.Next(sayi_kucuk,sayi_buyuk);
                    if (rs % 2 == 1)
                    {
                        dizi[i] = rs;
                        lb_o15.Items.Add(dizi[i]);
                        tpl = tpl + dizi[i];
                    }
                    else
                    {
                        i = i - 1;
                    }
                }
                lbl_o15.Text = Convert.ToString(tpl);
            }
        }

        private void button26_Click(object sender, EventArgs e)
        {
            /*
            Kullanıcnın girmiş olduğu degerler arasında
            kullanıcının girmiş oldugu deger kadar
            rastgele elemanlardan oluşan bir dizinin
            EN KÜÇÜK elemanını bulan programı yazınız ve
            Dizi elemanlarını bir listbox da gösteriniz?
            */
            int sayi1 = Convert.ToInt32(txt_o16_1.Text);
            int sayi2 = Convert.ToInt32(txt_o16_2.Text);
            int eleman_sayisi = Convert.ToInt32(txt_o16_3.Text);
            int[] dizi = new int[eleman_sayisi];
            Random rnd = new Random();

            for (int i = 0; i < dizi.Length; i = i + 1) 
            {
                dizi[i] = rnd.Next(sayi1, sayi2);
                lb_16.Items.Add(dizi[i]);
            }

            int en_kucuk_eleman = dizi[0];
            for (int j = 0; j < dizi.Length; j=j+1)
            {
                if (dizi[j]<en_kucuk_eleman)
                {
                    en_kucuk_eleman = dizi[j];
                }
            }
            lbl_o16.Text = Convert.ToString(en_kucuk_eleman);

        }
        /* a!+b! / (c!-d!)* z!  30 satır kod */

        // parametreli / parametresiz
        // geriye deger gönderen/ 

        public void fnk_mesaj()//genel, geriye deger göndermeyen,parametresiz
        {
            MessageBox.Show("fonksiyon içerisindeyiz");
        }
        /*dışarıdan almış oldugu parametreyi
        mesaj olarak ekrana veren bir fonksiyon*/
        public void fnk_mesaj_parametreli(string a)//a="24"
        {
            MessageBox.Show(a);
        }

        //parametre olarak almış oldugu 2 sayıyı toplayan
        // ve toplam sonucunu geri gönderen bir fonksiyon yazalım

        public int fnk_topla(int a, int b)//a=5 , b=6
        {
            int toplam = a + b;
            return toplam;
        }
        private void button27_Click(object sender, EventArgs e)
        {
            //fnk_mesaj();
            //fnk_mesaj_parametreli("akif");
          int deger = fnk_topla(5, 6);
          fnk_mesaj_parametreli(Convert.ToString(deger));
        }

        private void button28_Click(object sender, EventArgs e)
        {
            int sayi1 = Convert.ToInt32(txt_o17.Text);
            int sayi2 = Convert.ToInt32(txt_o17_2.Text);

            int gelen_deger = fnk_topla(sayi1, sayi2);
            fnk_mesaj_parametreli(Convert.ToString(gelen_deger));

        }
        /*Parametre olarak almış oldugu bir sayının faktöriyelini
        hesaplayan ve sonucunu geri gönderen bir fonksiyon yazınız */
        public int fnk_faktoriyel(int a)//a=4
        {
            // a!= 1*2*3*4...a
            int fk=1;
            for(int i=1; i<= a; i=i+1)
            {
                fk = fk * i;
            }
            return fk;
        }
        private void button30_Click(object sender, EventArgs e)
        {
            int deger = Convert.ToInt32(txt_o18.Text);
            int gelen_deger=fnk_faktoriyel(deger);
            fnk_mesaj_parametreli(Convert.ToString(gelen_deger));
        }

        private void button29_Click(object sender, EventArgs e)
        {// x!+4Y= ?
            int x = Convert.ToInt32(txt_o19_1.Text);
            int y = Convert.ToInt32(txt_o19_2.Text);

            int fnk_x = fnk_faktoriyel(x);
            int sonuc = fnk_topla(fnk_x, (4 * y));
            fnk_mesaj_parametreli(Convert.ToString(sonuc));
        }
        /* - parametre olarak almış oldugu 2 degeri çarpan ve sonucu geri
        gönderen bir fonksiyon yazınız?
        - Parametre olarak almış oldugu 2 degeri birbirine bölen ve 
        sonucu geri gonderen bir fonksiyon yazınız?
        - Parametre olarak almış oldugu 2 degerin farkını alan ve sonucu
        geri gönderen bir fonksiyon yazınız ?
        - (a!+2b)/(4c-3d)= formülünü sadece yazılan fonksiyonlarla hesaplayan
        ve sonucu meaj olarak verdiren progamı yazınız ?
            */
        public int fnk_carma(int a, int b)
        {
            return a * b;
        }

        public double fnk_bolme(double a,double b)
        {
            return a / b;
        }

        public int fnk_fark(int a, int b)
        {
            return a - b;
        }

        private void button31_Click(object sender, EventArgs e)
        {
            //(a!+2b)/(4c-3d)= formülünü sadece yazılan fonksiyonlarla hesaplayan
            //ve sonucu meaj olarak verdiren progamı yazınız ?
            int sayi_a = Convert.ToInt32(txt_o20_a.Text);
            int sayi_b = Convert.ToInt32(txt_o20_b.Text);
            int sayi_c = Convert.ToInt32(txt_o20_c.Text);
            int sayi_d = Convert.ToInt32(txt_o20_d.Text);

            int a_fk = fnk_faktoriyel(sayi_a);
            int b_2 = fnk_carma(2, sayi_b);
            double pay = fnk_topla(a_fk, b_2);

            int c_4 = fnk_carma(4, sayi_c);
            int d_3 = fnk_carma(sayi_d, 3);
            double payda = fnk_fark(c_4, d_3);

            double sonuc = fnk_bolme(pay, payda);

            fnk_mesaj_parametreli("İşlem Sonucu: "+sonuc);
        }

        /* -parametre olarak almış oldugu bir degerin
        mutklak degerini hesaplayan ve sonucu geri gönderen
        bir fonksiyon yazınız 
        - (|a|+(3b)!)/(3c-2d)= formülünü sadece fonksiyonlar 
        ile hesaplayınız? GEREKLİ TÜM KONTROLLERİ SAĞLAYINIZ !!!
           |-3|=3  */
        public int fnk_mutlak(int a)
        {
            if (a<0)
            {
                a = a * -1;
            }

            return a;
        }

        private void button32_Click(object sender, EventArgs e)
        {
            //(| a | +(3b)!)/ (3c - 2d)=

            if (txt_o21_a.Text == "" || txt_o21_b.Text == "" || txt_o21_c.Text == "" || txt_o21_d.Text == "")
            {
                fnk_mesaj_parametreli("Eksik bilgi girildi");
            }
            else
            {
                int sayi_a = Convert.ToInt32(txt_o21_a.Text);
                int sayi_b = Convert.ToInt32(txt_o21_b.Text);
                int sayi_c = Convert.ToInt32(txt_o21_c.Text);
                int sayi_d = Convert.ToInt32(txt_o21_d.Text);

                int c_3 = fnk_carma(3, sayi_c);
                int d_2 = fnk_carma(sayi_d, 2);
                double payda = fnk_fark(c_3, d_2);
                if (payda == 0)
                {
                    fnk_mesaj_parametreli("Bu degerlerle hesap yapılamaz");
                }
                else
                {
                    int m_a = fnk_mutlak(sayi_a);
                    int b_3_fk = fnk_faktoriyel(fnk_carma(3, sayi_b));
                    double pay = fnk_topla(m_a, b_3_fk);

                    double sonuc = fnk_bolme(pay, payda);
                    fnk_mesaj_parametreli("Sonuç : " + sonuc);
                }
            }
        }
        /*parametre olarak almış oldugu 2 deger arasında
        parametre olarak almış oldugu boyut kadar
        rastgele elemanlar oluşan bir dizi oluşturan
        ve diziyi geri gönderen bir fonk. yazınız*/
        public int[] fnk_dizi_olustur(int baslangic,int bitis,int boyut)
        {
            int[] dizi = new int[boyut];
            Random rnd = new Random();
            for (int i=0;i<boyut; i=i+1)
            {
                dizi[i] = rnd.Next(baslangic, bitis);
            }
            return dizi;
        }

        private void button33_Click(object sender, EventArgs e)
        {
            int a = Convert.ToInt32(txt_o22_a.Text);
            int b = Convert.ToInt32(txt_o22_b.Text);
            int c = Convert.ToInt32(txt_o22_c.Text);

            int[] yeni_dizi = fnk_dizi_olustur(a, b, c);
            for (int i=0;i<yeni_dizi.Length;i=i+1)
            {
                lb_22.Items.Add(yeni_dizi[i]);
            }
        }
        /*parametre olarak almış oldugu dizinin elemanlarının toplamını bulan
        ve sonucu geri gönderen bir fonksiyon oluşturunuz ve kullanınız*/

        public int fnk_dizi_eleman_toplam(int[] a)
        {
            int toplam = 0;
            for (int i=0; i<a.Length; i=i+1)
            {
                toplam = toplam + a[i];
            }
            return toplam;
        }
        private void button34_Click(object sender, EventArgs e)
        {
            int bas = Convert.ToInt32(txt_o23_a.Text);
            int bit = Convert.ToInt32(txt_o23_b.Text);
            int byt = Convert.ToInt32(txt_o23_c.Text);

            int[] dizimiz = fnk_dizi_olustur(bas, bit, byt);

            for (int j=0; j<dizimiz.Length;j=j+1)
            {
                lb_23.Items.Add(dizimiz[j]);
            }

            int sonuc = fnk_dizi_eleman_toplam(dizimiz);
            fnk_mesaj_parametreli(Convert.ToString(sonuc));
        }

        /*Parametre olarak almış oldugu dizinin çift elemanlarının sayısını
        bulan ve sonucu geri gönderen bir fonk. yazınız kullanınız */

        public int fnk_dizi_cift_sayisi(int[] dizi)
        {
            int say = 0;
            for (int i=0; i<dizi.Length; i=i+1)
            {
                if (dizi[i]%2==0)
                {
                    say = say + 1;
                }
            }
            return say;
        }

        private void button35_Click(object sender, EventArgs e)
        {
            int bas = Convert.ToInt32(txt_o24_a.Text);
            int bit = Convert.ToInt32(txt_o24_b.Text);
            int byt = Convert.ToInt32(txt_o24_c.Text);
            int[] olusan_dizi = fnk_dizi_olustur_tekrarlamayan(bas, bit, byt);

            for (int i=0; i<olusan_dizi.Length; i=i+1)
            {
                lb_24.Items.Add(olusan_dizi[i]);
            }
            int sonuc = fnk_dizi_cift_sayisi(olusan_dizi);
            fnk_mesaj_parametreli(Convert.ToString(sonuc));
        }
        /*Parametre olarak almış oldugu 2 deger arasında yine parametre
        olarak almış oldugu deger kadar TEKRARLAMAYAN ELEMANLARDAN OLUŞAN
        bir dizi oluşturan ve bu diziyi geri gönderen bir fonk. yazınız*/

        public int[] fnk_dizi_olustur_tekrarlamayan(int bas,int bit,int byt)
        {
            int[] dizi = new int[byt];
            Random rnd = new Random();
            int varmi = 0;

            for (int i=0; i<dizi.Length; i=i+1)
            {
               int rast_sayi = rnd.Next(bas, bit);

                for (int j=0; j<i; j=j+1)//dizide aynı elemanın taranması
                {
                    if (rast_sayi==dizi[j])
                    {
                        varmi = 1;
                    }
                }

                if (varmi == 0)
                {
                    dizi[i] = rast_sayi;
                }
                else
                {
                    i = i - 1;
                    varmi = 0;
                }
            }
            return dizi;
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            //load da çalışmasını istediğim kodları buraya yazıcaz
            // YEREL DEGİŞKENLER
            Random rnd = new Random();
            sayi_program = rnd.Next(1, 100);


        }

        private void button1_Click(object sender, EventArgs e)
        {
            
            MessageBox.Show("Kod Yamaya Başlıyoruz");
            int sayi1 = 5;
            int sayi2 = 8;
            int toplam = sayi1 + sayi2;

            MessageBox.Show(Convert.ToString(toplam));

        }

        


    }
}
