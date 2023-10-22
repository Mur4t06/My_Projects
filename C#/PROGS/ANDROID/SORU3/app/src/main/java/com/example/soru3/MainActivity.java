package com.example.soru3;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    EditText etMetin1;
    EditText etMetin2;
    Button btntoplam;
    Button btncikartma;
    Button btncarpim;
    Button btnbolum;
    TextView twSonuc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etMetin1= (EditText) findViewById(R.id.etMetin1);
        etMetin2= (EditText) findViewById(R.id.etMetin2);
        btntoplam= (Button) findViewById(R.id.btntoplam);
        btncikartma= (Button) findViewById(R.id.btncikartma);
        btncarpim= (Button) findViewById(R.id.btncarpim);
        btnbolum= (Button) findViewById(R.id.btnbolum);

        btntoplam.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                int sayi1 =Integer.parseInt(etMetin1.getText().toString());
                int sayi2 =Integer.parseInt(etMetin2.getText().toString());
                int toplam = sayi1 + sayi2;

                twSonuc.setText(Integer.toString(toplam));
            }
        });

        btncikartma.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int sayi1 =Integer.parseInt(etMetin1.getText().toString());
                int sayi2 =Integer.parseInt(etMetin2.getText().toString());
                int cikartma = sayi1 - sayi2;

                twSonuc.setText(Integer.toString(cikartma));
            }
        });
        btnbolum.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                double sayi1 =Double.parseDouble(etMetin1.getText().toString());
                double sayi2 =Double.parseDouble(etMetin2.getText().toString());
                double bolum = sayi1 / sayi2;

                twSonuc.setText(Double.toString(bolum));

            }
        });
        btncarpim.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                double sayi1 =Double.parseDouble(etMetin1.getText().toString());
                double sayi2 =Double.parseDouble(etMetin2.getText().toString());
                double carpim = sayi1 * sayi2;

                twSonuc.setText(Double.toString(carpim));
            }
        });

    }
}