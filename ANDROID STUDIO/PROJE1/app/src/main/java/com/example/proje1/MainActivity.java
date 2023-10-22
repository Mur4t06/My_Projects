package com.example.proje1;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import org.w3c.dom.Text;

public class MainActivity extends AppCompatActivity {

    // Nesnelerin tanımlandığı kısım.
    EditText etMetin1;
    Button btnHesapla;
    TextView twSonuc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Nesnelere form araçlarının atandığı kısım.
        etMetin1 = (EditText) findViewById(R.id.etMetin1);
        btnHesapla = (Button) findViewById(R.id.btnHesapla);
        twSonuc = (TextView) findViewById(R.id.twSonuc);

        // Buton nesnesinin click olayını(event) aktif ettiğimiz kısım.
        btnHesapla.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                twSonuc.setText(etMetin1.getText().toString());
                // getText() komutu nesnede bulunan metni okumayı sağlar.
                // setText() komutu nesneye metin girişini sağlar.
            }
        });
    }
}