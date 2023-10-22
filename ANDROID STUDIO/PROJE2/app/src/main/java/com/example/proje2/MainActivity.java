package com.example.proje2;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    EditText etMetin1, etMetin2;
    Button btnHesapla;
    TextView twSonuc;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etMetin1 = (EditText) findViewById(R.id.etMetin1);
        etMetin2 = (EditText) findViewById(R.id.etMetin2);
        btnHesapla = (Button) findViewById(R.id.btnHesapla);
        twSonuc = (TextView) findViewById(R.id.twSonuc);

        btnHesapla.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int Sayi1 = Integer.parseInt(etMetin1.getText().toString());
                int Sayi2 = Integer.parseInt(etMetin2.getText().toString());
                int Sonuc = Sayi1 + Sayi2;

                twSonuc.setText(Integer.toString(Sonuc));
            }
        });
    }
}