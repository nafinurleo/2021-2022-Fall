#include <sstream>
#include <iostream>
#include <fstream>
using namespace std;

string removeComments(string programString){

    int n = programString.length();
    string removedString;
    bool singleLineComment = false;
    bool multiLineComment = false;

    for (int i = 0; i < n; i++){

        if (singleLineComment == true && programString[i] == '\n')
            singleLineComment = false;

        else if (multiLineComment == true && programString[i] == '*' && programString[i + 1] == '/')
            multiLineComment = false, i++;

        else if (singleLineComment || multiLineComment)
            continue;
        else if (programString[i] == '/' && programString[i + 1] == '/')
            singleLineComment = true, i++;
        else if (programString[i] == '/' && programString[i + 1] == '*')
            multiLineComment = true, i++;

        else
            removedString += programString[i];
    }
    return removedString;
}

int main(){

    ifstream infile;
    infile.open("comments.txt");

    stringstream strStream;
    strStream << infile.rdbuf();
    string str = strStream.str();
    cout << "Before removing comment: \n\n";
    cout << str << endl;
    cout << "\nAfter removing comment: \n\n";
    cout << removeComments(str);
    infile.close();

    return 0;
}
