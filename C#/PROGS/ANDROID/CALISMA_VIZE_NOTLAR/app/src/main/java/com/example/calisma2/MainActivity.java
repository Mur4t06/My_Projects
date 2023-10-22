package com.example.calisma2;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    EditText etMetin1;
    EditText etMetin2;
    TextView twSonuc;
    Button btnHesapla;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etMetin1 = (EditText) findViewById(R.id.etMetin1);
        etMetin2 = (EditText) findViewById(R.id.etMetin2);
        twSonuc = (TextView) findViewById(R.id.twSonuc);
        btnHesapla = (Button) findViewById(R.id.btnHesapla);
    }
}