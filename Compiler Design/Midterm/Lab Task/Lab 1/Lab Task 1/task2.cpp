#include<iostream>
#include<fstream>
#include<stdlib.h>
#include<string.h>
#include<ctype.h>
using namespace std;

int isKeyword(char bf[]){
    char keywords[40][40] = {"auto","double","int","struct",
    "break","else","long","switch","case","enum","register",
    "typedef","char","extern","return","union","const","float",
    "short","unsigned","continue","for","signed","void","default",
    "goto","sizeof","voltile","do","if","static","while"};

	int i, flag = 0;

	for(i = 0; i < 32; ++i){
		if(strcmp(keywords[i], bf) == 0){
			flag = 1;
			break;
		}
	}
	return flag;
}

int main(){
	char ch, bf[15], operators[] = "+-*/%=";
	ifstream input("program.txt");
	int i,j=0;

	if(!input.is_open()){
		cout<<"Sorry: There is an issue in opening the file"<<endl;
		exit(0);
	}

	while(!input.eof()){
   		ch = input.get();

   		for(i = 0; i < 6; ++i){
   			if(ch == operators[i])
   				cout<<ch<<" : operator"<<endl;
   		}

   		if(isalnum(ch)){
   			bf[j++] = ch;
   		}

   		else if((ch == ' ' || ch == '\n') && (j != 0)){
   				bf[j] = '\0';
   				j = 0;

   				if(isKeyword(bf) == 1)
   					cout<<bf<<" is keyword"<<endl;
   				else
   					cout<<bf<<" : identifier"<<endl;
   		}

	}

	input.close();

	return 0;
}
