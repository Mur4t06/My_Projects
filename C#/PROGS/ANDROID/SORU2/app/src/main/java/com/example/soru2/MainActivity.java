package com.example.soru2;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.text.Editable;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import org.w3c.dom.Text;

public class MainActivity extends AppCompatActivity {

    EditText etMetin1;
    EditText etMetin2;
    Button btnHesapla;
    TextView twSonuc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etMetin1=(EditText) findViewById(R.id.etMetin1);
        etMetin2=(EditText) findViewById(R.id.etMetin2);
        btnHesapla=(Button) findViewById(R.id.btnHesapla);
        twSonuc=(TextView) findViewById(R.id.twSonuc);

        btnHesapla.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                int sayi1=Integer.parseInt(etMetin1.getText().toString());
                int sayi2=Integer.parseInt(etMetin2.getText().toString());
                int toplam = sayi1 + sayi2;

                twSonuc.setText(Integer.toString(toplam));
            }
        });
    }
}