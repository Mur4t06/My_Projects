package com.example.proje7;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.hardware.Sensor;
import android.hardware.SensorEvent;
import android.hardware.SensorEventListener;
import android.hardware.SensorManager;
import android.os.Bundle;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    TextView twSonuc;
    Sensor accelerometer;
    SensorManager sm;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        twSonuc = (TextView) findViewById(R.id.twSonuc);

        sm = (SensorManager) getSystemService(Context.SENSOR_SERVICE);

        accelerometer = sm.getDefaultSensor(Sensor.TYPE_ACCELEROMETER);
        sm.registerListener(mySensorEventListener, accelerometer,
                SensorManager.SENSOR_DELAY_NORMAL);
    }

    final SensorEventListener mySensorEventListener = new SensorEventListener(){
        public void onSensorChanged(SensorEvent sensorEvent){
            if (sensorEvent.sensor.getType() == Sensor.TYPE_ACCELEROMETER) {
                float[] values = sensorEvent.values;
                float x = values[0];
                float y = values[1];
                float z = values[2];

                twSonuc.setText("X: " + x + "\nY: " + y + "\nZ: " + z);
            }
        }
        //
        public void onAccuracyChanged(Sensor sensor, int accuracy){

        }
    };
}