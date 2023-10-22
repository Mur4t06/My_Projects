package com.example.proje9;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

        EditText etVize;
        EditText etFinal;
        TextView twSonuc;
        Button btnHesapla;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etVize = (EditText) findViewById(R.id.etVize);
        etFinal = (EditText) findViewById(R.id.etFinal);
        btnHesapla = (Button) findViewById(R.id.btnHesapla);
        twSonuc = (TextView) findViewById(R.id.twSonuc);

     btnHesapla.setOnClickListener(new View.OnClickListener() {
         @Override
         public void onClick(View view) {

             double vize_notu = Double.parseDouble(etVize.getText().toString());
             double final_notu = Double.parseDouble(etFinal.getText().toString());

             double sonuc = (vize_notu * 0.4) + (final_notu * 0.6);


             twSonuc.setText(Double.toString(sonuc));

             if (sonuc <= 49)
             {
                 twSonuc.setText(Double.toString(sonuc)+ "- FF");
             }
             else if (sonuc >49 && sonuc <= 59)
             {
                 twSonuc.setText(Double.toString(sonuc)+ "- FD");
             }
             else if (sonuc >59 && sonuc <= 69)
             {
                 twSonuc.setText(Double.toString(sonuc)+ "- DC-DD");
             }
             else if (sonuc >69 && sonuc <= 79)
             {
                 twSonuc.setText(Double.toString(sonuc)+ "- CB-CC");
             }
             else if (sonuc >79 && sonuc <= 84)
             {
                 twSonuc.setText(Double.toString(sonuc)+ "- BB");
             }
             else if (sonuc >84 && sonuc <= 89)
             {
                 twSonuc.setText(Double.toString(sonuc)+ "- BA");
             }
             else if (sonuc >89 && sonuc <= 100)
             {
                 twSonuc.setText(Double.toString(sonuc)+ "- AA");
             }
         }
     });



    }

}