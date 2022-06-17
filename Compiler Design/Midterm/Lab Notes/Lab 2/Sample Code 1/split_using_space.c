// C program to demonstrate working of strtok_r()
// by splitting string based on space character.
#include <stdio.h>
#include <string.h>

int main()
{
    char str[] = "I am a student of aiub";
    char* token;
    char* rest = str;

    while ((token = strtok_r(rest, " ", &rest)))
        printf("%s, ", token);

    return (0);
}
