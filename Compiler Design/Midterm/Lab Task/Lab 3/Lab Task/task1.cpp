#include <iostream>
using namespace std;

int main(){

    string input;
    cout<<"Enter the expression: ";
    cin>>input;
    char fc = input.at(0);
    char lc=input.at(input.length()-1);
    for(int i=0;i<input.length()-1;i++){

            char op=input.at(i);
            char ck1=input.at(i+1);
            char ck2=input.at(i);

    if((isalpha(ck2)==0)&&(isdigit(ck2)==0)){

        cout<<"Invalid" << endl;
        break;
    }
    else if(fc=='+'||fc=='-'
        ||fc=='*'||fc=='/'
        ||fc=='%'||fc=='='){

            cout << "Invalid" << endl;
            break;
    }
    else if((lc=='+'||lc=='-'||
             lc=='*'||lc=='/'||
             lc=='%'||lc=='=')){

            cout << "Invalid" << endl;
            break;
    }
    else if(( op == '%' || op == '/'
             || op == '*' || op == '+'
             || ck1 == '-')&&( ck1 == '%'
             || ck1 == '/' || ck1 == '*'
             || ck1 == '+' || ck1 == '-')){

            cout<<"Invalid"<<endl;
            break;
    }
    else{
            cout << "Valid" << endl;
            break;
    }
    }

    return 0;
}
