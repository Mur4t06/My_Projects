package com.example.prroje9;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.widget.TextView;

public class frm2 extends AppCompatActivity {

    TextView twSonuc;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_frm2);

        twSonuc = (TextView) findViewById(R.id.twSonuc);


        Intent intent = getIntent();
        String gelenVeri = intent.getStringExtra("KullaniciAdi");

        twSonuc.setText("Hoş Geldin " + gelenVeri);
    }
}