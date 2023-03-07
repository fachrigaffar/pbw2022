#include <iostream>

using namespace std;
// parameter formal
// prosedur
void hitungLuas(float p, float l){
    cout << 6 * p * l;   
}
// fungsi
float kubus(float p, float l){
    return 6 * p * l;
}
int main()
{
    float panjang, lebar;
    cout << "Masukkan Panjang : ";
    cin >> panjang;
    cout << "Masukkan Lebar : ";
    cin >> lebar;
    hitungLuas(panjang,lebar);// parameter aktual
    cout << endl;

    float x = kubus(2.5, 5.6); 
    cout << x;
    return 0;
}
