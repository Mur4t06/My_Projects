package com.example.proje8;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    EditText etVize, etFinal;
    Button btnHesapla;
    TextView twSonuc;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etVize = (EditText) findViewById(R.id.etVize);
        etFinal = (EditText) findViewById(R.id.etFinal);
        twSonuc = (TextView) findViewById(R.id.twSonuc);
        btnHesapla = (Button) findViewById(R.id.btnHesapla);

        btnHesapla.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                double Vize = Double.parseDouble(etVize.getText().toString());
                double Final = Double.parseDouble(etFinal.getText().toString());
                double NotOrtalamasi = (Vize * 40d / 100d) + (Final * 60d / 100d);

                String HarfNotu = "";
                if (NotOrtalamasi <= 39d)
                    HarfNotu = "FF";
                else if (NotOrtalamasi > 39d && NotOrtalamasi <= 49d)
                    HarfNotu = "FD";
                else if (NotOrtalamasi > 49d && NotOrtalamasi <= 59d)
                    HarfNotu = "DD";
                else if (NotOrtalamasi > 59d && NotOrtalamasi <= 69d)
                    HarfNotu = "DC";
                else if (NotOrtalamasi > 69d && NotOrtalamasi <= 74d)
                    HarfNotu = "CC";
                else if (NotOrtalamasi > 74d && NotOrtalamasi <= 79d)
                    HarfNotu = "CB";
                else if (NotOrtalamasi > 79d && NotOrtalamasi <= 84d)
                    HarfNotu = "BB";
                else if (NotOrtalamasi > 84d && NotOrtalamasi <= 89d)
                    HarfNotu = "BA";
                else if (NotOrtalamasi > 89d && NotOrtalamasi <= 100d)
                    HarfNotu = "AA";
                else
                    HarfNotu = "Geçersiz";

                twSonuc.setText(Double.toString(NotOrtalamasi) + " - " + HarfNotu);
            }
        });
    }
}