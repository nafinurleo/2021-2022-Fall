#include <iostream>
using namespace std;

int main(){

    string input;
    cout<<"Enter the sentence:";
    getline(cin,input);
    int total=input.size();

    if((input[0]>='a'&&input[0]<='z')||input[0]==' '||input[0]=='.'){

            cout<<"Grammatically incorrect"<<endl;
    }
    else if(input[total-1]!='.'){

        cout<<"Grammatically incorrect "<<endl;
    }

    else{

        bool flag=false;
        for(int i=0;i<input.size()-1;i++){

            if((input[i]>='A'&&input[i]<='Z')&&(input[i+1]>='A'&&input[i+1]<='Z')){

                flag=true;
                break;
            }
            if(input[i]==' '&&input[i+1]==' '){

                flag=true;
                break;
            }
            if((input[i]>='a'&&input[i]<='z')&&input[i+1]>='A'&&input[i+1]<='Z'){

                flag=true;
                break;
            }
            if(input[i]==' ' && input[i+1]=='.'){

                flag=true;
                break;
            }
        }

    if(flag=false)

        cout<<"Grammatically incorrect "<<endl;
    else

        cout<<"Grammatically correct "<<endl;
    }
}
