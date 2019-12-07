// p_22.c
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main() {
	char *s;
	s = malloc(128);
	printf("%p\n", s);

	//
	memcpy(s, "abc", 3);
	s[3] = '\0';
	printf("%s\n", s);

	//
	free(s);
	s = NULL; // 解放したらすぐにNULLを入れるようにする(事故防止)

	return 0;
}


