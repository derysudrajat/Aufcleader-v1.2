#define RELAY_1 D2  
#define RELAY_2 D3
#define RELAY_3 D4
#define RELAY_4 D5
#define RELAY_5 D6
#define RELAY_6 D7

#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <ESP8266WebServer.h>
#include <SoftwareSerial.h>

const char* ssid = "sokard";
const char* pass = "sokard99";
SoftwareSerial esp8266(8,9);
ESP8266WebServer server(80);
String command;
void setup() {
 pinMode(RELAY_1, OUTPUT);
digitalWrite(RELAY_1, HIGH);
 pinMode(RELAY_2, OUTPUT);
digitalWrite(RELAY_2, HIGH);
pinMode(RELAY_3, OUTPUT);
digitalWrite(RELAY_3, HIGH);
pinMode(RELAY_4, OUTPUT);
digitalWrite(RELAY_4, HIGH);
pinMode(RELAY_5, OUTPUT);
digitalWrite(RELAY_5, HIGH);
pinMode(RELAY_6, OUTPUT);
digitalWrite(RELAY_6, HIGH);
  Serial.begin(115200);
  esp8266.begin(115200);
  
// Connecting WiFi

 if (WiFi.status()== WL_NO_SHIELD){
    Serial.print("Modul Wifi tidak ada");
    while(true);
  }
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.print(ssid);
  WiFi.begin(ssid, pass);
while (WiFi.status() != WL_CONNECTED) 
  {
    delay(500);
    Serial.print(".");
  }
Serial.print("Alamat IP : ");
Serial.println(WiFi.localIP());
 
 // Starting WEB-server 
     server.on ( "/", HTTP_handleRoot );
     server.onNotFound ( HTTP_handleRoot );
     server.begin();    
}

void lampuOn(){ 

     digitalWrite(RELAY_1, LOW);
  }

void lampuOff(){ 

      digitalWrite(RELAY_1, HIGH);
  }

void pumpOn(){ 
      digitalWrite(RELAY_2, LOW);
  }

void pumpOff(){

      digitalWrite(RELAY_2, HIGH);
  }

void feedOn(){

     digitalWrite(RELAY_3, LOW);
     delay(7500);
     digitalWrite(RELAY_3, HIGH);
   }

void feedOff(){
      

     digitalWrite(RELAY_3, HIGH);
  }

void cleanerOn(){ 

digitalWrite(RELAY_4, LOW);
digitalWrite(RELAY_5, LOW);
delay(8000);
digitalWrite(RELAY_5, HIGH);
  }

void cleanerOff(){ 

     digitalWrite(RELAY_4, HIGH);
  }

void loop() {
    server.handleClient();
    
      command = server.arg("State");
      if (command == "lampuHidup") lampuOn();
      else if (command == "lampuMati") lampuOff();
      else if (command == "pumpHidup") pumpOn();
      else if (command == "pumpMati") pumpOff();
      else if (command == "feederHidup") feedOn();
      else if (command == "feederMati") feedOff();
      else if (command == "cleanerHidup"){
        cleanerOn();
        delay(5000);
      }
      else if (command == "cleanerMati"){
        cleanerOff();
      }
      
}

void HTTP_handleRoot(void) {

if( server.hasArg("State") ){
       Serial.println(server.arg("State"));
  }
  server.send ( 200, "text/html", "" );
  delay(1);
}
