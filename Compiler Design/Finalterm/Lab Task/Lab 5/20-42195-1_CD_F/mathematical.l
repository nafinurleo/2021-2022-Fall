%{
#include <stdio.h> 
#include <string.h>
int cout1 = 0, count2 = 0, v = 1, k = -1, m = 0, n = 0; 
    char ope[10][10], opr[10][10], st[100]; 
%}
%%
"(" { k++; st[k] = '('; } 
"{" { k++; st[k] = '{'; } 
"[" { k++; st[k] = '['; } 
")" { 
    if (st[k] != '(') { v = 0;     } 
    else if(count2>0 && (count2-cout1)!=1){ v=0; }
    else{ k--; count2=1; cout1=0; } 
} 
"}" { 
    if (st[k] != '{') { v = 0;     } 
    else if(count2>0 && (count2-cout1)!=1){ v=0; }
    else{ k--; count2=1; cout1=0; } 
} 
"]" { 
	if (st[k] != '[') { v = 0; } 
    else if(count2>0 && (count2-cout1)!=1){ v=0; }
    else{ k--; count2=1; cout1=0; } 
          
} 
"+"|"-"|"*"|"/" { cout1++; strcpy(opr[m], yytext); m++; } 
[0-9]+|[a-zA-Z][a-zA-Z0-9_]* { count2++; strcpy(ope[n], yytext); n++; }
. ;
%%
int yywrap()
{
return 1;
}
int main()
{
FILE *fp;
char filename[50];
printf("Enter the filename: \n");
scanf("%s",filename);
fp = fopen(filename,"r");
yyin = fp;
yylex();
	if (v == 1 && k == -1) {
		printf("\nValid Expression\n"); 
	} 
	else
		printf("\nInvalid Expression\n");
return 0;
}