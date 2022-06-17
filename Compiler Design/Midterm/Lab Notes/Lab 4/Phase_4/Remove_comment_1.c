#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>

int main()
{
    char *input_program=0, *modified_program=0;
    int file_length=0, i=0, j=0;
    bool single = false;
    bool multiple = false;

    FILE *fp = fopen("input.c","r");
    if(!fp)
    {
        printf("Source can't be opened");
        exit(0);
    }

    fseek(fp, 0, SEEK_END);
    file_length = ftell (fp);
    fseek(fp, 0, SEEK_SET);

    input_program = (char *) malloc (file_length+1);
    modified_program = (char *) malloc (file_length+1);
    fread(input_program, 1, file_length, fp);
    input_program[file_length]='\0';

    fclose(fp);

    printf("Before removing comment:\n");
    for(i=0; input_program[i] != '\0'; i++)
    {
        printf("%c",input_program[i]);

    }

    for (int i=0; i<file_length; i++)
    {
        /// Check for beginning of single line comments and change the flag
        if (input_program[i] == '/' && input_program[i+1] == '/')
        {
            single = true;
            i++;
        }

        /// Check for beginning of multiple lines comments and change the flag
        else if (input_program[i] == '/' && input_program[i+1] == '*')
        {
            multiple = true;
            i++;
        }

        /// Check the end condition of single line comment & flag status, change the flag
        else if (single == true && input_program[i] == '\n')
        {
            single = false;
        }

        /// Check the end condition of multiple lines comment & flag status, change the flag
        else if  (multiple == true && input_program[i] == '*' && input_program[i+1] == '/')
        {
            multiple = false;
            i++;
        }
        /// Ignore the characters if it is in a comment
        else if (single || multiple)
            continue;

        /// Store the non-comment character into a new input field and continue the process
        else
        {
            modified_program[j] = input_program[i];
            j++;
        }
    }
    modified_program[j] = '\0';

    printf("\n\nAfter removing comment:\n");
    j=0;
    while(modified_program[j] != '\0')
    {
        printf("%c",modified_program[j]);
        j++;
    }
    return 0;
}
