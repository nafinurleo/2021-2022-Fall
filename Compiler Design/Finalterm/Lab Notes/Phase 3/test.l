/*
[A-Za-z0-9]	{printf("alpha numeric\n");}
. {printf("Wrong Input\n");}
.*abb.*	{printf("The strig that contains the sub-string 'abb' \n");}

*/



/* Rules */
%%
.*abb.*	{printf("The strig that contains the sub-string 'abb' \n");}
.*(compiler|design).*	{printf("accept\n");} 
.*	{printf("reject\n");}
%%

/* User defined function */
int yywrap()
{
	return 1;
}

/* Main */
int main()
{
	yylex();	
	return 0;
}