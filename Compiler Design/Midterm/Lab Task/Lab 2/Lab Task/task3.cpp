#include <iostream>
#include <stack>
#include <string>
using namespace std;

bool parenthesis(char opening, char closing){

    if (opening == '(' && closing == ')')
    {
        return true;
    }
    else if (opening == '{' && closing == '}')
    {
        return true;
    }
    else if (opening == '[' && closing == ']')
    {
        return true;
    }
    return false;
}


bool expression(string exp){

    stack<char> Stack;
    for (int i = 0; i < exp.length(); i++)
    {
        if (exp[i] == '(' || exp[i] == '{' || exp[i] == '[')
            Stack.push(exp[i]);
        else if (exp[i] == ')' || exp[i] == '}' || exp[i] == ']')
        {
            if (Stack.empty() || !parenthesis(Stack.top(), exp[i]))
                return false;
            else
                Stack.pop();
        }
    }

    if(Stack.empty())
    {return true;}
    else{return false;}
}

int main(){

    string exp;
    cout << "Enter an expression:  ";
    cin >> exp;
    if (expression(exp))
        cout << "\nExpression is valid"<<endl;
    else
        cout << "\nExpression is not valid"<<endl;
}
