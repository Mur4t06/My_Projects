package com.example.proje3;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    Button btnHesapla;
    TextView twSonuc;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btnHesapla = (Button) findViewById(R.id.btnHesapla);
        twSonuc = (TextView) findViewById(R.id.twSonuc);

        btnHesapla.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int Sonuc=0;
                for(int i=1;i<=10;i++)
                {
                    Sonuc+=i;
                }

                twSonuc.setText(Integer.toString(Sonuc));
            }
        });
    }
}