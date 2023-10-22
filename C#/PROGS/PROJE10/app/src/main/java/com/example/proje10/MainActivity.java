package com.example.proje10;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    EditText etSayi;
    TextView twSonuc;
    Button btnHesapla;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etSayi = (EditText) findViewById(R.id.etSayi);
        twSonuc = (TextView) findViewById(R.id.twSonuc);
        btnHesapla = (Button) findViewById(R.id.btnHesapla);

        btnHesapla.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                int Sayi = Integer.parseInt(etSayi.getText().toString());

                int asalmi=0;

                for (int i =2; i < Sayi; i = i + 1)
                {
                    if (Sayi % i == 0)
                    {
                        asalmi ++;
                    }
                }
                if (asalmi == 0)
                {
                    twSonuc.setText("Girilen Sayı Asaldır.");
                }
                else
                {
                    twSonuc.setText("Girilen Sayı Asal Sayı Değildir.");
                }


            }
        });



    }
}