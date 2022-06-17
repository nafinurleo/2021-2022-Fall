%{
int n = 0;
int a = 0;
int b = 0;
int c = 0;
int d = 0;
int e = 0;
%}
%%
"int"|"float"|"this" {n++;printf("\t %s - keywords\n", yytext);}
"<="|"=="|"="|"++"|"-"|"*"|"+" {n++;printf("\t %s - operator\n", yytext);}
[a-zA-Z_][a-zA-Z0-9_]* {a++;printf("\t %s - identifier/word\n", yytext);}
"," {b++;printf("\t %s - separator\n", yytext);}
"." {c++;printf("\t %s - separator\n", yytext);}
";" {d++;printf("\t %s - separator\n", yytext);}
[0-9][a-zA-Z_][a-zA-Z0-9_]* {n++;printf("\t %s - invalid\n", yytext);}
[a-zA-Z@] {n++;printf("\t %s - invalid\n", yytext);}
[0-9]*"."[0-9]+ {n++;printf("\t %s - float\n", yytext);}
[0-9]+ {n++;printf("\t %s - integer\n", yytext);}
[\n] {e++;}
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
printf("\nNumber of token - %d\n", n);
printf("Number of word/identifier - %d\n",a);
printf("Number of comma - %d\n",b);
printf("Number of fullstop - %d\n",c);
printf("Number of semicolon - %d\n",d);
printf("Number of lines - %d\n",e);
return 0;
}