package com.example.calisma1;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    TextView twSonuc;
    EditText etMetin1;
    Button btnHesapla;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        twSonuc = (TextView) findViewById(R.id.twSonuc);
        etMetin1 = (EditText) findViewById(R.id.etMetin1);
        btnHesapla = (Button) findViewById(R.id.btnHesapla);

        btnHesapla.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                twSonuc.setText(etMetin1.getText().toString());
            }
        });
    }
}