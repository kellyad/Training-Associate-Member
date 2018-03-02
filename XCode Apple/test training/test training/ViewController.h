///Users/prk/Desktop/test training/test training/ViewController.h
//  ViewController.h
//  test training=
//
//  Created by Kelly M on 2/9/15.
//  Copyright (c) 2015 ___FULLUSERNAME___. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController<UIAlertViewDelegate>

@property (nonatomic)int n;
@property (strong,nonatomic) NSString *string;
- (IBAction)btnLogin:(id)sender;
@property (weak, nonatomic) IBOutlet UITextField *txtUsername;
//didalam view sendiri punya akses strong , pas dimodal ituh akan banyak makan memori
@property (weak, nonatomic) IBOutlet UITextField *txtPassword;
- (IBAction)dissmised:(id)sender;
@property (weak, nonatomic) IBOutlet UILabel *lblTest;


//garbage collector
//pointer
//+(static)dan -(nonstatic)(return type)message;
//strong tipe yang gak bisa dihapus weak bisa dihapus
//nonatomic dan atomic -> thread safe dan non-thread safe
// threat yang bakal dijalan suatu tertentu -> thread synchronized
//threat non safe riskan mislakan value yang 1 dan yang lain berbeda
//property langsung buat setter getter encapsulation
//c objective

@end
