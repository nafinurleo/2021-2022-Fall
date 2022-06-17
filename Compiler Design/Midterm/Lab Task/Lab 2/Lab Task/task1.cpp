#include<iostream>
#include<conio.h>
using namespace std;

int main(){

    char str[50] = {"Nafinur Leo"};
    int i,vowel=0,consonant=0;
    for(i=0;str[i];i++){
    if((str[i]=='a')||(str[i]=='A')||(str[i]=='E')||(str[i]=='e')||(str[i]=='I')
       ||(str[i]=='i')||(str[i]=='O')||(str[i]=='o')||(str[i]=='U')||(str[i]=='u'))
    {
        vowel++;
        cout<<"Vowels of the name = "<<str[i]<<"\n";
    }
    else if((str[i]>='a' && str[i]<='z')||(str[i]>='A' && str[i]<='Z'))
    {
        consonant++;
        cout<<"Consonant of the name = "<<str[i]<<"\n";
    }
    }
    return 0;

}
