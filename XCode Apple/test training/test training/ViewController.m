//
//  ViewController.m
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 ___FULLUSERNAME___. All rights reserved.
//
//id pointer void bisa kemana aja ,
#import "ViewController.h"

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad
{
    [super viewDidLoad];
	// Do any additional setup after loading the view, typically from a nib.
    //self pointer
    self.n=0;
    [self calculate:5 sumThis:10];
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

-(BOOL)calculate:(int) x sumThis:(int) y
{
    NSLog(@"%d",x+y);
    //NSString * teststring =[[NSString alloc]init];
    return YES;
    
    
}
-(BOOL)authenticateWithUsername:(NSString*)username andPassword:(NSString*)password
{
    //true or false true :YES false :NO this-> self null _> nil
    //if(username==@"admin") //alamar dari pointer{}
    if([username isEqualToString:@"admin"]&& [password isEqualToString:@"admin"])
    return YES;
    else{
        return  NO;
        }
}
- (IBAction)btnLogin:(id)sender {
    NSLog(@"button login ditekan");
    //cara 1
    NSString *username = self.txtUsername.text;
   //cara 2
    NSString *password =_txtPassword.text;
    
    if([self authenticateWithUsername:username andPassword:password])
    [self performSegueWithIdentifier:@"segueViewKedua" sender:nil];
    else
    {
        self.n++;
        self.lblTest.text= [NSString stringWithFormat:@"Login Attempt: %d",self.n];
        NSString *msg = @"Failed To Login";
        UIAlertView *alert =[[UIAlertView alloc] initWithTitle:@"ERROR" message:msg delegate:self cancelButtonTitle:@"OK" otherButtonTitles:@"Btn 2", nil];
        [alert show];
        
    }
}

- (IBAction)dissmised:(id)sender {
    [self.txtUsername resignFirstResponder];
    [self.txtPassword resignFirstResponder];
    
}
- (void)alertView:(UIAlertView *)alertView clickedButtonAtIndex:(NSInteger)buttonIndex
{
    NSLog(@"Clicked Button:%d",buttonIndex);
}

@end
