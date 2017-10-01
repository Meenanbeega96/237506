# 237506
My first repository on GitHub
public class ExerciseTwoThread extends Thread {

public static void main(String[] args) {

ExerciseTwoThread  t1 = new ExerciseTwoThread();
ExerciseTwoThread  t2 = new ExerciseTwoThread ();


try{	
	for (int a=1; a<=10; a++) {
        System.out.print(a + " ");
        sleep(2000);
    
     if (a==5){
    	 for(int i=0; i<10; i++)
                 System.out.print("A" + ""); 
                 System.out.print(" ");
                 sleep(2000);
       }     
   }
}
catch(Exception e){
e.printStackTrace();
}
}

}
