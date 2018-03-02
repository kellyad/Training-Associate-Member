//
//  CustomerTableViewController.h
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "Cutomer.h"
#import "DetailViewController.h"

@interface CustomerTableViewController : UITableViewController <NSURLConnectionDelegate>
//3 property yang paling wajib ada bila gunakan web host service
@property (strong,nonatomic) NSURLConnection *connection;
@property (strong,nonatomic) NSMutableURLRequest *request;
@property (strong,nonatomic) NSMutableData *data;
@property (strong,nonatomic) NSMutableArray *arrayCustomer;

@property (nonatomic) int selectedindex;
@end
