package com.example.proje3;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    EditText etMetin1, etMetin2;
    Button btnHesapla1, btnHesapla2, btnHesapla3, btnHesapla4;
    TextView twSonuc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        etMetin1 = (EditText) findViewById(R.id.etMetin1);
        etMetin2 = (EditText) findViewById(R.id.etMetin2);
        btnHesapla1 = (Button) findViewById(R.id.btnHesapla1);
        btnHesapla2 = (Button) findViewById(R.id.btnHesapla2);
        btnHesapla3 = (Button) findViewById(R.id.btnHesapla3);
        btnHesapla4 = (Button) findViewById(R.id.btnHesapla4);

        twSonuc = (TextView) findViewById(R.id.twSonuc);

        btnHesapla1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int Sayi1 = Integer.parseInt(etMetin1.getText().toString());
                int Sayi2 = Integer.parseInt(etMetin2.getText().toString());
                int Sonuc = Sayi1 + Sayi2;

                twSonuc.setText(Integer.toString(Sonuc));

            }
        });
        btnHesapla2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int Sayi1 = Integer.parseInt(etMetin1.getText().toString());
                int Sayi2 = Integer.parseInt(etMetin2.getText().toString());
                int Sonuc = Sayi1 - Sayi2;

                twSonuc.setText(Integer.toString(Sonuc));
            }
        });

        btnHesapla3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int Sayi1 = Integer.parseInt(etMetin1.getText().toString());
                int Sayi2 = Integer.parseInt(etMetin2.getText().toString());
                int Sonuc = Sayi1 * Sayi2;

                twSonuc.setText(Integer.toString(Sonuc));
            }
        });

        btnHesapla4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
               double Sayi1 = Integer.parseInt(etMetin1.getText().toString());
                double Sayi2 = Integer.parseInt(etMetin2.getText().toString());
              double Sonuc = Sayi1 / Sayi2;

                twSonuc.setText(Double.toString(Sonuc));
            }
        });
    }

}