#include<iostream>
#include<fstream>
using namespace std;

string removeComment(string prog)
{
    int n = prog.length();
    string update;

    bool single = false;
    bool multiple = false;

    for (int i=0; i<n; i++)
    {
        if (single == true && prog[i] == '\n')
        {
            single = false;
        }
        else if  (multiple == true && prog[i] == '*' && prog[i+1] == '/')
        {
            multiple = false;
            i++;
        }
        else if (single || multiple)
        {
            continue;
        }
        else if (prog[i] == '/' && prog[i+1] == '/')
        {
            single = true;
            i++;
        }
        else if (prog[i] == '/' && prog[i+1] == '*')
        {
            multiple = true;
            i++;
        }
        else
        {
            update += prog[i];
        }
    }
    return update;
}

int main()
{
    ifstream input("input.c");
    string str;
    getline(input, str, '\0');
    cout << "Before removing comment: \n" << endl;
    cout << str << endl;
    cout << "\n\n\nAfter removing comment: \n" << endl;
    cout<<removeComment(str)<<endl;
    input.close();
    return 0;
}
