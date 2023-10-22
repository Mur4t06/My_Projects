package com.example.prroje9;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText etKullaniciAdi, etSifre;
    Button btnGiris;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etKullaniciAdi = (EditText) findViewById(R.id.etKullaniciAdi);
        etSifre = (EditText) findViewById(R.id.etSifre);
        btnGiris = (Button) findViewById(R.id.btnGiris);

        btnGiris.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String KullaniciAdi = etKullaniciAdi.getText().toString();
                String Sifre = etSifre.getText().toString();

                if (KullaniciAdi.equals("Hitit")  && Sifre.equals("123456"))
                {
                    Intent i = new Intent(getApplicationContext(), frm2.class);
                    i.putExtra("KullaniciAdi", KullaniciAdi);
                    startActivity(i);
                }
                else
                {
                    Toast.makeText(getApplicationContext(),"Kullanıcı adı ve ya şifre hatalı.",
                            Toast.LENGTH_LONG).show();
                }
            }
        });
    }
}