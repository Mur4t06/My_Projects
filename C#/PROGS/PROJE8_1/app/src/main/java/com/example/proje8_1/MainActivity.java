package com.example.proje8_1;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.hardware.lights.Light;
import android.os.Bundle;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    TextView twSonuc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        twSonuc=(TextView) findViewById(R.id.twSonuc);


        SensorManager mySensorManager=
                (SensorManager) getSystemService(Context.SENSOR_SERVICE);

        Sensor myAccelerometerSensor =mySensorManager.getDefaultSensor(Sensor.TYPE_ACCELEROMETER);



        SensorEventListener AccelerometerSensorEventListener = new SensorEventListener() {
            @Override
            public void onSensorChanged(SensorEvent sensorEvent) {

            }

            @Override
            public void onAccuracyChanged(Sensor sensor, int i) {

            }
        };

        mySensorManager.registerListener(AccelerometerSensorEventListener,
                myAccelerometerSensor, SensorManager.SENSOR_DELAY_FASTEST);

        twSonuc.setText(getText(Integer.toString()));
    }
}