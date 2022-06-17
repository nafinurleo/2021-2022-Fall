#include <iostream>
#include <fstream>
#include <sstream>
#include <string>
using namespace std;

int main()
{
    FILE *fp;
    int vowel=0, consonant=0;
    char str;
    char message[100];
    fp=fopen("program.txt","r");

    if(fp==NULL)
    {
        cout<<"Source can't be opened"<<endl;
        return 0;
    }
    while(!feof(fp))
    {
        fgets(message,200,fp);
        cout<<message;
    }
    cout <<endl<< endl;
    fseek(fp,0,SEEK_SET);

    while(str!=EOF)
    {
        str=fgetc(fp);

    if((str=='a')||(str=='A')||(str=='E')||(str=='e')||
       (str=='I')||(str=='i')||(str=='O')||(str=='o')||(str=='U')||(str=='u'))
    {
        vowel++;
        cout<<"Vowels of the name = "<<str<<"\n";
    }
    else if((str>='a' && str<='z')||(str>='A' && str<='Z'))
    {
        consonant++;
        cout<<"Consonant of the name = "<<str<<"\n";
    }
    }
    fclose(fp);
    return 0;
}
