#include <GL/glut.h>

void display()
{
   glClear(GL_COLOR_BUFFER_BIT);
   glColor3f(1.0, 1.0, 1.0); // Set color to white

   // Draw the house using lines
   glBegin(GL_LINES);

   // Draw the base of the house
   glVertex2f(-0.5, -0.5);
   glVertex2f(0.5, -0.5);

   glVertex2f(-0.5, -0.5);
   glVertex2f(-0.5, 0.5);

   glVertex2f(-0.5, 0.5);
   glVertex2f(0.5, 0.5);

   glVertex2f(0.5, 0.5);
   glVertex2f(0.5, -0.5);

   // Draw the roof
   glVertex2f(-0.5, 0.5);
   glVertex2f(0.0, 1.0);

   glVertex2f(0.5, 0.5);
   glVertex2f(0.0, 1.0);

   // Draw the door
   glVertex2f(-0.1, -0.5);
   glVertex2f(-0.1, -0.3);

   glVertex2f(-0.1, -0.3);
   glVertex2f(0.1, -0.3);

   glVertex2f(0.1, -0.3);
   glVertex2f(0.1, -0.5);

   glEnd();
   glFlush();
}

int main(int argc, char** argv)
{
   glutInit(&argc, argv);
   glutCreateWindow("House of Lines");
   glutInitWindowSize(400, 400);
   glutInitWindowPosition(100, 100);
   glutDisplayFunc(display);
   glutMainLoop();

   return 0;
}