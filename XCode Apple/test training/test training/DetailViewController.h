//
//  DetailViewController.h
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "Cutomer.h"

@interface DetailViewController : UIViewController<UIScrollViewDelegate>

@property (strong,nonatomic) Cutomer *customer;
@property (weak, nonatomic) IBOutlet UILabel *lblNama;
@property (weak, nonatomic) IBOutlet UILabel *lblUmur;
@property (weak, nonatomic) IBOutlet UILabel *lblPhone;
@property (weak, nonatomic) IBOutlet UILabel *lblAddress;
@property (weak, nonatomic) IBOutlet UIScrollView *scrollView;
@property (weak, nonatomic) IBOutlet UIButton *btnRegist;

@property (strong,nonatomic) UIImageView *imageView;

@end
