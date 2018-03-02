//
//  DetailViewController.m
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import "DetailViewController.h"

@interface DetailViewController ()

@end

@implementation DetailViewController

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        // Custom initialization
    }
    return self;
}

- (void)viewDidLoad
{
    self.lblNama.text = [NSString stringWithFormat:@"%@ %@",self.customer.firstName,self.customer.lastName];
    self.lblUmur.text=[NSString stringWithFormat:@"%d Years Old", self.customer.age];
    PhoneNumber *phone = [self.customer.arrayPhoneNumber objectAtIndex:0];
    
    self.lblPhone.text = [NSString stringWithFormat:@"Phone Number: %@",phone.phoneNumber];
    Address *address = self.customer.address;
    self.lblAddress.text = [NSString stringWithFormat:@"%@ %@ %@ %@",address.streetaddress,address.city,address.postalcode,address.state];
    
    [super viewDidLoad];
    NSURL *url =[NSURL URLWithString:@"http://dreamatico.com/data_images/popcorn/popcorn-6.jpg"];
    
    NSData *data = [NSData dataWithContentsOfURL:url];
    UIImage *image = [[UIImage alloc]initWithData:data];
    self.imageView = [[UIImageView alloc]initWithImage:image];
    [self.scrollView addSubview:self.imageView];
   self.scrollView.contentSize = image.size;
    self.scrollView.delegate=self;
    self.scrollView.maximumZoomScale=4.0;
    self.scrollView.minimumZoomScale=1.0;
    // Do any additional setup after loading the view.
}

-(UIView*) viewForZoomingInScrollView:(UIScrollView *)scrollViewewForZooming
{
    return self.imageView;
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender
{
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
