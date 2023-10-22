package com.example.proje4_3;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    Button btnHesapla;
    EditText etMetin1;
    TextView twSonuc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnHesapla = (Button) findViewById(R.id.btnHesapla);
        twSonuc = (TextView) findViewById(R.id.twSonuc);
        etMetin1 = (EditText) findViewById(R.id.etMetin1);
    }
}